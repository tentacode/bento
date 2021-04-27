<?php

namespace App\Controller;

use App\Repository\EmojiRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BentoController extends AbstractController
{
    public function __construct(private EmojiRepository $emojiRepository) {

    }

    /**
     * @Route("/", name="bento")
     */
    public function index(): Response
    {
        $emojis = $this->emojiRepository->findAll(); 
        $randomEmoji = $emojis[array_rand($emojis)];

        return $this->render('bento/index.html.twig', [
            'random_emoji' => $randomEmoji,
        ]);
    }
}
