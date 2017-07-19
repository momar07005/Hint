<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_c64bccbdfb5d8054bf06b7142db62469684a497bd7859e8a73ea45b984704322 extends Twig_Template
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
        $__internal_93db1939d39a76e49f7f6ec7fd47e1c8f6e4dded08cea3563b13c03f929a72c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93db1939d39a76e49f7f6ec7fd47e1c8f6e4dded08cea3563b13c03f929a72c0->enter($__internal_93db1939d39a76e49f7f6ec7fd47e1c8f6e4dded08cea3563b13c03f929a72c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_38f956078a02a1d792b2c5afcb2ffa509d61d6a78e1f9c1a6d2663c5b1e4b63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f956078a02a1d792b2c5afcb2ffa509d61d6a78e1f9c1a6d2663c5b1e4b63c->enter($__internal_38f956078a02a1d792b2c5afcb2ffa509d61d6a78e1f9c1a6d2663c5b1e4b63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_93db1939d39a76e49f7f6ec7fd47e1c8f6e4dded08cea3563b13c03f929a72c0->leave($__internal_93db1939d39a76e49f7f6ec7fd47e1c8f6e4dded08cea3563b13c03f929a72c0_prof);

        
        $__internal_38f956078a02a1d792b2c5afcb2ffa509d61d6a78e1f9c1a6d2663c5b1e4b63c->leave($__internal_38f956078a02a1d792b2c5afcb2ffa509d61d6a78e1f9c1a6d2663c5b1e4b63c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
