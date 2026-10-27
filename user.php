<?php

// Lab 2C: Constructors, Constants, and Inheritance

echo '<h1>Lab 2C: User and Tutor Classes</h1>';

function cleanText($value)
{
    // Remove spaces at the start/end and collapse repeated spaces into one
    return preg_replace('/\s+/', ' ', trim($value));
}

class User
{
    public const STATUS_ACTIVE = 'active';

    public $name;
    public $email;
    public $status;

    public function __construct($name, $email)
    {
        $this->name = cleanText($name);
        $this->email = strtolower(cleanText($email));
        $this->status = self::STATUS_ACTIVE;
    }
}

class Tutor extends User
{
    public $subject;

    public function __construct($name, $email, $subject)
    {
        parent::__construct($name, $email);
        $this->subject = cleanText($subject);
    }

    public function profileSummary()
    {
        return "Name: $this->name<br>"
            . "Email: $this->email<br>"
            . "Subject: $this->subject<br>"
            . "Status: $this->status<br>";
    }
}

$tutor = new Tutor('  Maria    Chen ', '  Maria.Chen@Example.COM ', '  Web   Development  ');

echo $tutor->profileSummary();
