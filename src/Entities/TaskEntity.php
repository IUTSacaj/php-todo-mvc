<?php

class TaskEntity
{
    private int $id;
    private string $title;
    private string $description;
    private bool $completed;
    private string $createdAt;
    private string $updatedAt;
    private string $completedAt;

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
    public function setId(int $id): TaskEntity
    {
        $this->id = $id;
        return $this;
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
    public function setTitle(string $title): TaskEntity
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): TaskEntity
    {
        $this->description = $description;
        return $this;
    }


    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt): TaskEntity
    {
        $this->createdAt = $createdAt;
        return $this;
    }


    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     */
    public function setUpdatedAt(string $updatedAt): TaskEntity
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }


    /**
     * @return string
     */
    public function getCompletedAt(): string
    {
        return $this->completedAt;
    }

    /**
     * @param string $completedAt
     */
    public function setCompletedAt(string $completedAt): TaskEntity
    {
        $this->completedAt = $completedAt;
        return $this;
    }


    public function isCompleted(): bool
    {
        return $this->completed;
    }

    public function setCompleted(bool $completed): TaskEntity
    {
        $this->completed = $completed;
        return $this;
    }
}
?>