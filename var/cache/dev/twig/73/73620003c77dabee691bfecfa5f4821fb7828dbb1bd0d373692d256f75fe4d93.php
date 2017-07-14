<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_58276fd769d6cc6bbd3d16e85ad3a5f7e268b85bbf0e1e642c804ccccb417e60 extends Twig_Template
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
        $__internal_b21ffeddb348c9beaad36b7fbb4c80f3b7b8a55b21f4adbf571e8c12f8cc1b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21ffeddb348c9beaad36b7fbb4c80f3b7b8a55b21f4adbf571e8c12f8cc1b47->enter($__internal_b21ffeddb348c9beaad36b7fbb4c80f3b7b8a55b21f4adbf571e8c12f8cc1b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d5e207a7c071c8b2253c4d63b099437c4970df95e62e7609d8c97b85c42fb4cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e207a7c071c8b2253c4d63b099437c4970df95e62e7609d8c97b85c42fb4cc->enter($__internal_d5e207a7c071c8b2253c4d63b099437c4970df95e62e7609d8c97b85c42fb4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b21ffeddb348c9beaad36b7fbb4c80f3b7b8a55b21f4adbf571e8c12f8cc1b47->leave($__internal_b21ffeddb348c9beaad36b7fbb4c80f3b7b8a55b21f4adbf571e8c12f8cc1b47_prof);

        
        $__internal_d5e207a7c071c8b2253c4d63b099437c4970df95e62e7609d8c97b85c42fb4cc->leave($__internal_d5e207a7c071c8b2253c4d63b099437c4970df95e62e7609d8c97b85c42fb4cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
