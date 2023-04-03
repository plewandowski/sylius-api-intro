<?php

declare(strict_types=1);

namespace Acme\SyliusExamplePlugin\Entity;

use Sylius\Component\Resource\Model\TimestampableTrait;
use Sylius\Component\Resource\Model\ToggleableTrait;

class BlogPost implements BlogPostInterface
{
    use ToggleableTrait;

    use TimestampableTrait;

    private ?int $id = null;

    private ?string $code = null;

    private ?string $title = null;

    private ?string $content = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): void
    {
        $this->content = $content;
    }
}
