<?php 

class Character 
{
    const TYPE = "Human";
    
    private string $name;
    private int $age;


    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // Mutateur / Setter
    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    // Accesseur / Getter
    public function getName(): string 
    {
        return $this->name;
    }

    /**
     * Return the Age of the Character
     *
     * @return integer
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the Age of the character
     *
     * @param integer $age
     * @return static
     */
    public function setAge(int $age): static
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Say hello to someone
     *
     * @param string $name
     * @return string
     */
    public function sayHello(string $name): string
    {
        return "Bonjour {$name}";
    }

    /**
     * Say goodbye
     *
     * @return string
     */
    public function sayGoodbye(): string
    {
        return "Au revoir.";
    }

    public function getType(): string 
    {
        return self::TYPE;
    }
}