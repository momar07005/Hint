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
        $__internal_6e33fc1935151cc340d7fd6414cd6fefe41230922848d616fdc93324643bd9cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e33fc1935151cc340d7fd6414cd6fefe41230922848d616fdc93324643bd9cc->enter($__internal_6e33fc1935151cc340d7fd6414cd6fefe41230922848d616fdc93324643bd9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2f9d3dcc87db53715ece4148b1d36d4009677fa9bf8530b10fb633497b8f9aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9d3dcc87db53715ece4148b1d36d4009677fa9bf8530b10fb633497b8f9aa3->enter($__internal_2f9d3dcc87db53715ece4148b1d36d4009677fa9bf8530b10fb633497b8f9aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_6e33fc1935151cc340d7fd6414cd6fefe41230922848d616fdc93324643bd9cc->leave($__internal_6e33fc1935151cc340d7fd6414cd6fefe41230922848d616fdc93324643bd9cc_prof);

        
        $__internal_2f9d3dcc87db53715ece4148b1d36d4009677fa9bf8530b10fb633497b8f9aa3->leave($__internal_2f9d3dcc87db53715ece4148b1d36d4009677fa9bf8530b10fb633497b8f9aa3_prof);

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
