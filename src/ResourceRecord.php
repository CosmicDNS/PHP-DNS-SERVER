<?php

namespace yswery\DNS;

class ResourceRecord
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $type;

    /**
     * @var int
     */
    private $ttl;

    /**
     * @var string|array
     */
    private $rdata;

    /**
     * @var int
     */
    private $class = ClassEnum::INTERNET;

    /**
     * @var bool
     */
    private $question = false;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ResourceRecord
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return ResourceRecord
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getTtl()
    {
        return $this->ttl;
    }

    /**
     * @param int $ttl
     * @return ResourceRecord
     */
    public function setTtl($ttl)
    {
        $this->ttl = $ttl;
        return $this;
    }

    /**
     * @return array|string
     */
    public function getRdata()
    {
        return $this->rdata;
    }

    /**
     * @param array|string $rdata
     * @return ResourceRecord
     */
    public function setRdata($rdata)
    {
        $this->rdata = $rdata;
        return $this;
    }

    /**
     * @return int
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param int $class
     * @return ResourceRecord
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return bool
     */
    public function isQuestion()
    {
        return $this->question;
    }

    /**
     * @param bool $question
     * @return ResourceRecord
     */
    public function setQuestion($question)
    {
        $this->question = (bool) $question;
        return $this;
    }
}
