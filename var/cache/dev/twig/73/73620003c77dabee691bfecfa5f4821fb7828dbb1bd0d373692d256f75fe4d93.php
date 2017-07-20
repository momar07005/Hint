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
        $__internal_f7b560d33834559129de56d9f7a3a3b626ac9d6ab2ae79a9a8c7521a9a9d3079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b560d33834559129de56d9f7a3a3b626ac9d6ab2ae79a9a8c7521a9a9d3079->enter($__internal_f7b560d33834559129de56d9f7a3a3b626ac9d6ab2ae79a9a8c7521a9a9d3079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_dc521efa9db6054aa4c6f10bd2b746d949d423993046f42fd6b111956cb91ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc521efa9db6054aa4c6f10bd2b746d949d423993046f42fd6b111956cb91ecd->enter($__internal_dc521efa9db6054aa4c6f10bd2b746d949d423993046f42fd6b111956cb91ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f7b560d33834559129de56d9f7a3a3b626ac9d6ab2ae79a9a8c7521a9a9d3079->leave($__internal_f7b560d33834559129de56d9f7a3a3b626ac9d6ab2ae79a9a8c7521a9a9d3079_prof);

        
        $__internal_dc521efa9db6054aa4c6f10bd2b746d949d423993046f42fd6b111956cb91ecd->leave($__internal_dc521efa9db6054aa4c6f10bd2b746d949d423993046f42fd6b111956cb91ecd_prof);

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
