<?php

class Hello
{

    private string $talk;


    public function __construct(string $talk)
    {
        $this->talk = $talk;
    }

    /**
     * @return string
     */
    public function getTalk(): string
    {
        return $this->talk;
    }

    /**
     * @param string $talk
     */
    public function setTalk(string $talk): void
    {
        $this->talk = "Hello World !";
    }

}