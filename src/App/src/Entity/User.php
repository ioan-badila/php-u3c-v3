<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * App\Entity\User
 *
 * @ORM\Table(name="u3c_user", uniqueConstraints={
 *       @ORM\UniqueConstraint(name="u3c_username_uniq", columns={"username"}, options={"where": "user_status = 1"})
 * })
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User extends \Doctrine\Common\Persistence\PersistentObject
{

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=45, nullable=false)
     *
     */
    private $username;

    /**
     * @var string $password
     *
     * @ORM\Column(name="user_password", type="string", length=32, nullable=false)
     */
    private $password;

    /**
     * @var string $salt
     *
     * @ORM\Column(name="salt", type="string", length=45, nullable=false)
     */
    private $salt;

    /**
     * @var boolean $passwordReset
     *
     * @ORM\Column(name="password_reset", type="boolean", nullable=false)
     */
    private $passwordReset;

    /**
     * @var boolean $passwordRequireChange
     *
     * @ORM\Column(name="password_require_change", type="boolean", nullable=false)
     */
    private $passwordRequireChange;

    /**
     * Start datetime of task in UTC format
     *
     * @var datetime
     * @ORM\Column(name="password_last_change", type="UtcDateTime", nullable=true)
     */
    private $passwordLastChange;

    /**
     * @var smallint $systemUser
     *
     * @ORM\Column(name="systemuser", type="smallint", nullable=false, options={"default" = 0})
     */
    private $systemUser;

    /**
     * @var smallint $passwordLockoutCounter
     *
     * @ORM\Column(name="password_lockout_counter", type="smallint", nullable=false, options={"default" = 0})
     */
    private $passwordLockoutCounter;

    /**
     * Start datetime of task in UTC format
     *
     * @var datetime
     * @ORM\Column(name="account_locked_since", type="UtcDateTime", nullable=true)
     */
    private $accountLockedSince;

    /**
     * @var string $firstName
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=false)
     */
    private $firstName;

    /**
     * @var string $middleName
     *
     * @ORM\Column(name="middle_name", type="string", length=255, nullable=true)
     */
    private $middleName;

    /**
     * @var string $lastName
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var gender $gender
     *
     * @ORM\Column(name="gender", type="string", length=1)
     */
    private $gender;

    /**
     *
     * Hire date (the date user was hired)
     * @var datetime
     * @ORM\Column(name="hire_date", type="date", nullable=false)
     */
    private $hireDate;

    /**
     *
     * Birthday
     * @var datetime
     * @ORM\Column(type="date", nullable=true)
     */
    private $birthday;

    /**
     * @var string $picture
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var string $pictureContent
     *
     * @ORM\Column(name="picture_content", type="binary", nullable=true)
     */
    private $pictureContent;

    /**
     * @var string $thumbnailContent
     *
     * @ORM\Column(name="thumbnail_content", type="binary", nullable=true)
     */
    private $thumbnailContent;

    /**
     * @var string $pictureType
     *
     * @ORM\Column(name="picture_type", type="string", length=30, nullable=true)
     */
    private $pictureType;

    /**
     * @var integer $pictureSize
     *
     * @ORM\Column(name="picture_size", type="integer", nullable=true)
     */
    private $pictureSize;

    /**
     * Status
     *  0 - disabled
     *  1 - enabled
     *
     * @var smallint
     * @ORM\Column(name="user_status", type="smallint", nullable=false)
     */
    private $status;

    /**
     * @var string $tmz
     *
     * @ORM\Column(name="tmz", type="string", length=128, nullable=false)
     */
    private $tmz;

    /**
     * User datetime lastseen in UTC format
     *
     * @var datetime
     * @ORM\Column(name="last_seen", type="UtcDateTime", nullable=true)
     */
    private $lastSeen;


    public function __construct()
    {
        $this->status = 1;
        $this->tmz = "UTC";
        $this->gender = 'm';
        $this->passwordReset = false;
        $this->passwordRequireChange = false;
        $this->systemUser = 0;
        $this->passwordLockoutCounter = 0;

    }

    /**
     * usedIn msg_template_context_variable.select_expression
     * usedIn user_context.exp
     **/
    public function getFullname()
    {
        return $this->lastName.' '.$this->firstName.' '.$this->middleName;
    }
    
}
