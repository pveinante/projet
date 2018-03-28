<?php
// src/follow_the_rhythm\SymfonyBundle/Form/DataTransformer/InvitationToCodeTransformer.php

namespace follow_the_rhythm\SymfonyBundle\Form\DataTransformer;

use follow_the_rhythm\SymfonyBundle\Entity\Invitation;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\UnexpectedTypeException;

/**
 * Transforms an Invitation to an invitation code.
 */
class InvitationToCodeTransformer implements DataTransformerInterface
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function transform($value)
    {
        if (null === $value) {
            return null;
        }

        if (!$value instanceof Invitation) {
            throw new UnexpectedTypeException($value, 'follow_the_rhythm\SymfonyBundle\Entity\Invitation');
        }

        return $value->getCode();
    }

    public function reverseTransform($value)
    {
        if (null === $value || '' === $value) {
            return null;
        }

        if (!is_string($value)) {
            throw new UnexpectedTypeException($value, 'string');
        }

        $dql = <<<DQL
SELECT i
FROM follow_the_rhythm\SymfonyBundle:Invitation i
WHERE i.code = :code
AND NOT EXISTS(SELECT 1 FROM follow_the_rhythm\SymfonyBundle:User u WHERE u.invitation = i)
DQL;

        return $this->entityManager
            ->createQuery($dql)
            ->setParameter('code', $code)
            ->setMaxResults(1)
            ->getOneOrNullResult();
    }
}