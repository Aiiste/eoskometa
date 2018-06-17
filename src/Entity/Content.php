<?php
/**
 * Created by PhpStorm.
 * User: Aiste
 * Date: 2018-05-19
 * Time: 14:26
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Content
 * @package App\Entity
 *
 * @ORM\Table(name="content")
 * @ORM\Entity()
 */
class Content
{
    /**
     * @var int
     *
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=false)
     */
    protected $text;

    /**
     * @var string
     *
     * @ORM\Column(name="image_path", type="string", length=255, nullable=true)
     */
    protected $imagePath;




    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getImagePath(): string
    {
        return $this->imagePath;
    }

    /**
     * @param string $imagePath
     */
    public function setImagePath(string $imagePath): void
    {
        $this->imagePath = $imagePath;
    }

}