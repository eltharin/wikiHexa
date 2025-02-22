<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Symfony\UX\StimulusBundle\StimulusBundle::class => ['all' => true],
    Symfony\UX\Turbo\TurboBundle::class => ['all' => true],
    Twig\Extra\TwigExtraBundle\TwigExtraBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
    Eltharin\AjaxResponserBundle\EltharinAjaxResponserBundle::class => ['all' => true],
    Eltharin\TwigFilesGetterBundle\EltharinTwigFilesGetterBundle::class => ['all' => true],
    Eltharin\AutomaticQueryBuilderBundle\EltharinAutomaticQueryBuilderBundle::class => ['all' => true],
    Eltharin\CommonAssetsBundle\EltharinCommonAssetsBundle::class => ['all' => true],
    Eltharin\ErrorLoggerBundle\EltharinErrorLoggerBundle::class => ['all' => true],
    Eltharin\InvitationsBundle\EltharinInvitationsBundle::class => ['all' => true],
    Eltharin\JuniorJSBundle\EltharinJuniorJSBundle::class => ['all' => true],
    Eltharin\MakerBundle\EltharinMakerBundle::class => ['dev' => true, 'test' => true],
];
