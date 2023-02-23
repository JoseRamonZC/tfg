<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @estilos/general.css */
class __TwigTemplate_739c14e081606b0dd40365d2d7ab860f2087dd9fc929f3fe892aeaf0e5e723f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "body {
    background-color: #F7F7F7;
}

.app-header-primary {
    background-color: #00B1D4;
}

.btn.btn-primary {
    color: #fff;
    border-color: #00B1D4;
    background-color: #00B1D4;
}
.header-menu .menu > .menu-item > .menu-link {
    border-left: 2px solid #f5f8fa;
}

.btn-check:active + .btn.btn-primary, .btn-check:checked + .btn.btn-primary, .btn.btn-primary.active, .btn.btn-primary.show, .btn.btn-primary:active:not(.btn-active), .btn.btn-primary:focus:not(.btn-active), .btn.btn-primary:hover:not(.btn-active), .show > .btn.btn-primary {
    color: #fff;
    border-color: #0098B5;
    background-color: #0098B5 !important;
}

.header-menu .menu > .menu-item > .menu-link .menu-title {
    align-items: inherit;
}

.text-sacyr {
    color: #00B1D4 !important;
}

.page-item.active .page-link {
    background-color: #00B1D4;
}

.page-item:hover:not(.offset) .page-link {
    color: #00B1D4;
}

.page-link:hover {
    background-color: #EBF3FF;
}

.text-right {
    text-align: right;
}

.form-check.form-check-solid .form-check-input:checked {
    background-color: #00B1D4;
}

.btn.btn-light-primary {
    color: #00B1D4;
    border-color: #D6E9FF;
    background-color: #D6E9FF;
}

.btn.btn-light-primary .svg-icon, .btn.btn-light-primary i {
    color: #00B1D4;
}

.btn-check:active + .btn.btn-light-primary, .btn-check:checked + .btn.btn-light-primary, .btn.btn-light-primary.active, .btn.btn-light-primary.show, .btn.btn-light-primary:active:not(.btn-active), .btn.btn-light-primary:focus:not(.btn-active), .btn.btn-light-primary:hover:not(.btn-active), .show > .btn.btn-light-primary {
    color: #fff;
    border-color: #00B1D4;
    background-color: #00B1D4 !important;
}

.form-check-input:checked {
    background-color: #00B1D4;
    border-color: #00B1D4;
}

.text-hover-primary:hover {
    transition: color .2s ease,background-color .2s ease;
    color: #00B1D4 !important;
}

.activo {
    border: 1px #00B1D4 solid;
    background-color: #EBF3FF;
    border-radius: 15px;
}

.menu-item:hover {
    background-color: #EBF3FF;
    border-radius: 15px;
}
.stepper.stepper-pills .stepper-item.current .stepper-icon {
    background-color: #00B1D4;
}

.stepper.stepper-pills .stepper-item .stepper-icon {
    background-color: #EBF3FF;
}
.stepper.stepper-pills .stepper-item .stepper-icon .stepper-number {
    color: #00B1D4 !important;
}

.select2-container--bootstrap5 .select2-dropdown .select2-results__option.select2-results__option--highlighted {
    background-color: #EBF3FF;
    color: #00B1D4;
}

.stepper.stepper-pills .stepper-item.completed .stepper-icon, .stepper.stepper-pills .stepper-item.current:last-child .stepper-icon {
    background-color: #EBF3FF;
}

.stepper.stepper-pills .stepper-item.completed .stepper-icon .stepper-check, .stepper.stepper-pills .stepper-item.current:last-child .stepper-icon .stepper-check {
    color: #00B1D4 !important;
}

.select2-container--bootstrap5 .select2-dropdown .select2-results__option.select2-results__option--selected {
    background-color: #00B1D4;
    color: #fff;
}

.daterangepicker .drp-calendar td.today, .daterangepicker .drp-calendar td.today.active {
    background: #EBF3FF !important;
    color: #00B1D4 !important;
}

.daterangepicker .drp-calendar td.active {
    background-color: #00B1D4 !important;
}

.daterangepicker .drp-calendar td.available:hover, .daterangepicker .drp-calendar th.available:hover {
    background: #EBF3FF !important;
    color: #00B1D4 !important;
}

.daterangepicker .drp-calendar td.available:hover, .daterangepicker .drp-calendar th.available:hover {
    background: #EBF3FF !important;
    color: #00B1D4 !important;
}

.menu-state-primary .menu-item.hover:not(.here) > .menu-link:not(.disabled):not(.active):not(.here), .menu-state-primary .menu-item:not(.here) .menu-link:hover:not(.disabled):not(.active):not(.here) {
    color: #00B1D4;
}

a {
    color: #00B1D4;
    text-decoration: none;
}

a:hover {
    color: #00B1D4;
}
.menu-state-primary .menu-item.hover:not(.here) > .menu-link:not(.disabled):not(.active):not(.here) .menu-title, .menu-state-primary .menu-item:not(.here) .menu-link:hover:not(.disabled):not(.active):not(.here) .menu-title {
    color: #00B1D4;
}

.menu-state-primary .menu-item.hover:not(.here) > .menu-link:not(.disabled):not(.active):not(.here) .menu-icon, .menu-state-primary .menu-item.hover:not(.here) > .menu-link:not(.disabled):not(.active):not(.here) .menu-icon .svg-icon, .menu-state-primary .menu-item.hover:not(.here) > .menu-link:not(.disabled):not(.active):not(.here) .menu-icon i, .menu-state-primary .menu-item:not(.here) .menu-link:hover:not(.disabled):not(.active):not(.here) .menu-icon, .menu-state-primary .menu-item:not(.here) .menu-link:hover:not(.disabled):not(.active):not(.here) .menu-icon .svg-icon, .menu-state-primary .menu-item:not(.here) .menu-link:hover:not(.disabled):not(.active):not(.here) .menu-icon i {
    color: #00B1D4;
}

.menu-link.active .menu-title {
    color: #00B1D4 !important;
}
.menu-state-primary .menu-item .menu-link.active .menu-icon, .menu-state-primary .menu-item .menu-link.active .menu-icon .svg-icon, .menu-state-primary .menu-item .menu-link.active .menu-icon i {
    color: #00B1D4;
}

.btn-link {
    color: #00B1D4;
}

.btn-link:hover {
    color: #0098B5;
}
.flatpickr-day.endRange, .flatpickr-day.endRange.inRange, .flatpickr-day.endRange.nextMonthDay, .flatpickr-day.endRange.prevMonthDay, .flatpickr-day.endRange:focus, .flatpickr-day.endRange:hover, .flatpickr-day.selected, .flatpickr-day.selected.inRange, .flatpickr-day.selected.nextMonthDay, .flatpickr-day.selected.prevMonthDay, .flatpickr-day.selected:focus, .flatpickr-day.selected:hover, .flatpickr-day.startRange, .flatpickr-day.startRange.inRange, .flatpickr-day.startRange.nextMonthDay, .flatpickr-day.startRange.prevMonthDay, .flatpickr-day.startRange:focus, .flatpickr-day.startRange:hover {
    background: #00B1D4;
}

.flatpickr-day.inRange, .flatpickr-day.nextMonthDay.inRange, .flatpickr-day.nextMonthDay.today.inRange, .flatpickr-day.nextMonthDay:focus, .flatpickr-day.nextMonthDay:hover, .flatpickr-day.prevMonthDay.inRange, .flatpickr-day.prevMonthDay.today.inRange, .flatpickr-day.prevMonthDay:focus, .flatpickr-day.prevMonthDay:hover, .flatpickr-day.today.inRange, .flatpickr-day:focus, .flatpickr-day:hover {
    cursor: pointer;
    outline: 0;
    background: #EBF3FF;
    color: #00B1D4;
    border-color: transparent;
}

.form-control.form-control-solid,.form-select.form-select-solid {
    background-color: #f0f2f4;
}

.btn-block {
    display: block;
    width: 100%;
}

.btn-check:active + .btn.btn-active-light-primary, .btn-check:checked + .btn.btn-active-light-primary, .btn.btn-active-light-primary.active, .btn.btn-active-light-primary.show, .btn.btn-active-light-primary:active:not(.btn-active), .btn.btn-active-light-primary:focus:not(.btn-active), .btn.btn-active-light-primary:hover:not(.btn-active), .show > .btn.btn-active-light-primary {
    color: #00B1D4;
    border-color: #EBF3FF;
    background-color: #EBF3FF !important;
}

.btn-check:active + .btn.btn-active-light-primary .svg-icon, .btn-check:active + .btn.btn-active-light-primary i, .btn-check:checked + .btn.btn-active-light-primary .svg-icon, .btn-check:checked + .btn.btn-active-light-primary i, .btn.btn-active-light-primary.active .svg-icon, .btn.btn-active-light-primary.active i, .btn.btn-active-light-primary.show .svg-icon, .btn.btn-active-light-primary.show i, .btn.btn-active-light-primary:active:not(.btn-active) .svg-icon, .btn.btn-active-light-primary:active:not(.btn-active) i, .btn.btn-active-light-primary:focus:not(.btn-active) .svg-icon, .btn.btn-active-light-primary:focus:not(.btn-active) i, .btn.btn-active-light-primary:hover:not(.btn-active) .svg-icon, .btn.btn-active-light-primary:hover:not(.btn-active) i, .show > .btn.btn-active-light-primary .svg-icon, .show > .btn.btn-active-light-primary i {
    color: #00B1D4;
}

.bg-sacyr {
    background-color: #00B1D4 !important;
}

.btn.btn-active-light-sacyr.active, .btn.btn-active-light-sacyr.active i {
    color: #00B1D4 !important;
    background-color: #EBF3FF !important;
}

.btn-active-light-sacyr:hover,.btn-active-light-sacyr:hover i{
    color: #00B1D4 !important;
}";
    }

    public function getTemplateName()
    {
        return "@estilos/general.css";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@estilos/general.css", "C:\\xampp\\htdocs\\almacen\\Almacen\\public\\styles\\general.css");
    }
}
