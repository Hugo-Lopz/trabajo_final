<?php

namespace App\Security\Voter;

use App\Entity\Conversacion;
use App\Repository\ConversacionRepository;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class ConversacionVoter extends Voter
{
    private $conversacionRepository;

    public function __construct(ConversacionRepository $conversacionRepository)
    {
        $this->conversacionRepository = $conversacionRepository;
    }
    const VIEW = 'view';

    protected function supports(string $attribute, mixed $subject): bool
    {
        return $attribute == self::VIEW && $subject instanceof Conversacion;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $resultado = $this->conversacionRepository->comprobarUsuarioEsParticipante(
            $subject->getId(),
            $token->getUser()->getUserIdentifier()
        );

        return !!$resultado;
    }
}