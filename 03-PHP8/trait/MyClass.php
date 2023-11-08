<?php 

class Book 
{
    use CreatedTrait;

    private string $id;
    private string $brand;

    // private DateTime $createdAt;
    // private User $createdBy;

    private DateTime $updateAt;
}