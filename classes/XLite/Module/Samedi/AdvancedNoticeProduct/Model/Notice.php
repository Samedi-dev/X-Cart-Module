<?php


namespace XLite\Module\Samedi\AdvancedNoticeProduct\Model;

use XLite\Model\AEntity;

/**
 * @Entity
 * @Table (name="smd_dev_notice")
 */

class Notice extends AEntity
{
    /**
     * @Id
     * @GeneratedValue (strategy="AUTO")
     * @Column         (type="integer")
     */
    protected int $id;

    /**
     * @Column (type="integer")
     */
    protected string $product_id;

    /**
     * @Column (type="text")
     */
    protected string $text;

    /**
     * @Column (type="text")
     */
    protected string $link;

    /**
     * @Column (type="float")
     */
    protected string $rating;

    /**
     * @Column (type="text")
     */
    protected string $author;

    /**
     * @Column (type="boolean")
     */
    protected bool $enabled = true;


    public function getId(): string
    {
        return $this->id;
    }

    public function getProductId(): int
    {
        return $this->product_id;
    }


    public function setProductId(int $product_id): void
    {
        $this->product_id = $product_id;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    public function getRating(): float
    {
        return $this->rating;
    }

    public function setRating(float $rating): void
    {
        $this->rating = $rating;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }
}