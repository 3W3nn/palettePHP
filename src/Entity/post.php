<?php

namespace Entity;
/**
 * @Entity @Table(name="posts")
 **/
class Post
{
    /** @Id @Column(type="integer") @GeneratedValue * */
    protected $id;

    /** @Column(type="string") * */
    protected $username;

    /** @Column(type="string") * */
    protected $profilePic;

    /** @Column(type="string") * */
    protected $postImage;

    /** @Column(type="text") * */
    protected $description;

    // Getter et setter pour id
    public function getId()
    {
        return $this->id;
    }

    // Getter et setter pour username
    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    // Getter et setter pour profilePic
    public function getProfilePic()
    {
        return $this->profilePic;
    }

    public function setProfilePic($profilePic)
    {
        $this->profilePic = $profilePic;
    }

    // Getter et setter pour postImage
    public function getPostImage()
    {
        return $this->postImage;
    }

    public function setPostImage($postImage)
    {
        $this->postImage = $postImage;
    }

    // Getter et setter pour description
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}
