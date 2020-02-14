<?php
namespace App\Products;

class Phone
{
    protected
        $display,
        $camera,
        $processor,
        $operational_system,
        $haveMiniJack;

    /**
     * @param mixed $display
     */
    public function setDisplay($display): void
    {
        $this->display = $display;
    }

    /**
     * @param mixed $camera
     */
    public function setCamera($camera): void
    {
        $this->camera = $camera;
    }

    /**
     * @param mixed $processor
     */
    public function setProcessor($processor): void
    {
        $this->processor = $processor;
    }

    /**
     * @param mixed $operational_system
     */
    public function setOperationalSystem($operational_system): void
    {
        $this->operational_system = $operational_system;
    }

    /**
     * @param mixed $haveMiniJack
     */
    public function setHaveMiniJack($haveMiniJack): void
    {
        $this->haveMiniJack = $haveMiniJack;
    }

    /**
     * @return mixed
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @return mixed
     */
    public function getCamera()
    {
        return $this->camera;
    }

    /**
     * @return mixed
     */
    public function getProcessor()
    {
        return $this->processor;
    }

    /**
     * @return mixed
     */
    public function getOperationalSystem()
    {
        return $this->operational_system;
    }

    /**
     * @return mixed
     */
    public function haveMiniJack()
    {
        return $this->haveMiniJack;
    }
}