<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_efa90cddc677422ab583451a76c2a841beac047a6adc3bd3526b9bff22c0681f extends Twig_Template
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
        $__internal_c52e3f3e38dd421f97904b49740b3b05fa4c65b24cd9845c33327da85b1297d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c52e3f3e38dd421f97904b49740b3b05fa4c65b24cd9845c33327da85b1297d0->enter($__internal_c52e3f3e38dd421f97904b49740b3b05fa4c65b24cd9845c33327da85b1297d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_ab26421756b84f0e239118cd866162e12a6dfe2d46cfc61e107d162cf70b5397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab26421756b84f0e239118cd866162e12a6dfe2d46cfc61e107d162cf70b5397->enter($__internal_ab26421756b84f0e239118cd866162e12a6dfe2d46cfc61e107d162cf70b5397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c52e3f3e38dd421f97904b49740b3b05fa4c65b24cd9845c33327da85b1297d0->leave($__internal_c52e3f3e38dd421f97904b49740b3b05fa4c65b24cd9845c33327da85b1297d0_prof);

        
        $__internal_ab26421756b84f0e239118cd866162e12a6dfe2d46cfc61e107d162cf70b5397->leave($__internal_ab26421756b84f0e239118cd866162e12a6dfe2d46cfc61e107d162cf70b5397_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
