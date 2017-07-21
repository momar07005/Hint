<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1a4b7feef3c1e349b9d1a1224be217b024253faaecd98f29d23bd75a6928cce8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc579da2e9e0ba77ab7e76b397b18d40f07f8358661208e529167e058a2c3eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc579da2e9e0ba77ab7e76b397b18d40f07f8358661208e529167e058a2c3eaa->enter($__internal_cc579da2e9e0ba77ab7e76b397b18d40f07f8358661208e529167e058a2c3eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_fca8d7cc92a9bda534b84739837616eb52a438b36f7406302f2731449a84b517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca8d7cc92a9bda534b84739837616eb52a438b36f7406302f2731449a84b517->enter($__internal_fca8d7cc92a9bda534b84739837616eb52a438b36f7406302f2731449a84b517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_cc579da2e9e0ba77ab7e76b397b18d40f07f8358661208e529167e058a2c3eaa->leave($__internal_cc579da2e9e0ba77ab7e76b397b18d40f07f8358661208e529167e058a2c3eaa_prof);

        
        $__internal_fca8d7cc92a9bda534b84739837616eb52a438b36f7406302f2731449a84b517->leave($__internal_fca8d7cc92a9bda534b84739837616eb52a438b36f7406302f2731449a84b517_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
