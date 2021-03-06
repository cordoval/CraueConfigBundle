<?php

namespace Craue\ConfigBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @author Christian Raue <christian.raue@gmail.com>
 * @copyright 2011 Christian Raue
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 *
 * @ORM\Entity
 * @ORM\Table(name="craue_config_setting")
 */
class Setting {

	/**
	 * @var string
	 * @ORM\Id
	 * @ORM\Column(name="name", type="string", nullable=false, unique=true)
	 * @Assert\NotNull
	 * @Assert\NotBlank
	 */
	protected $name;

	/**
	 * @var string
	 * @ORM\Column(name="value", type="string", nullable=true)
	 */
	protected $value;

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function setValue($value) {
		$this->value = $value;
	}

	public function getValue() {
		return $this->value;
	}

}
