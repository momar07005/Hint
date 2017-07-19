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
        $__internal_15e0a5d84622c33e07842b308bc5c8b5e4413aa80c8a292678a70526a6800edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15e0a5d84622c33e07842b308bc5c8b5e4413aa80c8a292678a70526a6800edd->enter($__internal_15e0a5d84622c33e07842b308bc5c8b5e4413aa80c8a292678a70526a6800edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_7846a9f52c1e56d194c2381822b986f0a03e2df3cd814218597c2e13f6bcf0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7846a9f52c1e56d194c2381822b986f0a03e2df3cd814218597c2e13f6bcf0aa->enter($__internal_7846a9f52c1e56d194c2381822b986f0a03e2df3cd814218597c2e13f6bcf0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_15e0a5d84622c33e07842b308bc5c8b5e4413aa80c8a292678a70526a6800edd->leave($__internal_15e0a5d84622c33e07842b308bc5c8b5e4413aa80c8a292678a70526a6800edd_prof);

        
        $__internal_7846a9f52c1e56d194c2381822b986f0a03e2df3cd814218597c2e13f6bcf0aa->leave($__internal_7846a9f52c1e56d194c2381822b986f0a03e2df3cd814218597c2e13f6bcf0aa_prof);

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
