<?php


interface ButtonInterface  {
    public function render();

}

interface CheckboxInterface {
    public function render();
}

class WindowsButton implements ButtonInterface {
    public function render() {
        echo "Rendering Windows Button";
    }
}

class MacButton implements ButtonInterface {
    public function render() {
        echo "Rendering Mac Button";
    }
}

class WindowsCheckBox implements CheckboxInterface {
    public function render() {
        echo "Rendering Windows Checkbox";
    }
}


class MacCheckBox implements CheckboxInterface {
    public function render() {
        echo "Rendering Mac Checkbox";
    }
}


interface GUIFactory {
    public function createButton(): ButtonInterface;
    public function createCheckbox(): CheckboxInterface;
}

class WindowsFactory implements GUIFactory {
    public function createButton(): ButtonInterface {
        return new WindowsButton();
    }

    public function createCheckbox(): CheckboxInterface {
        return new WindowsCheckBox();
    }
}


class MacFactory implements GUIFactory {
    public function createButton(): ButtonInterface {
        return new MacButton();
    }

    public function createCheckbox(): CheckboxInterface {
        return new MacCheckBox();
    }
}



function renderUI(GUIFactory $factory) {
    $button = $factory->createButton();
    $checkbox = $factory->createCheckbox();

    $button->render();
    $checkbox->render();

}

renderUI(new WindowsFactory());
renderUI(new MacFactory());





