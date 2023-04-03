<?php

declare(strict_types=1);

namespace Acme\SyliusExamplePlugin\Entity;

use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;
use Sylius\Component\Resource\Model\ToggleableInterface;


interface BlogPostInterface extends CodeAwareInterface, ResourceInterface, TimestampableInterface, ToggleableInterface
{
    public function getId(): ?int;

    public function getCode(): ?string;

    public function setCode(?string $code): void;

    public function getTitle(): ?string;

    public function setTitle(?string $title): void;

    public function getContent(): ?string;

    public function setContent(?string $content): void;
}
