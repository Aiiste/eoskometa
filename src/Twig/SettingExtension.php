<?php

namespace App\Twig;

use App\Entity\Setting;
use App\Repository\SettingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class SettingExtension extends AbstractExtension
{
    private $settingRepository;

    public function __construct(SettingRepository $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_setting', [$this, 'doSomething']),
        ];
    }

    public function doSomething($name, $default = null)
    {
        $setting = $this->settingRepository->findOneBy(['name' => $name]);

        return $setting instanceof Setting ? $setting->getValue() : $default;
    }
}
