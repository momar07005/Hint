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
        $__internal_c3b47b1e5505f07d6d66dc0f1e616eeb1f323dd668f4c8eab8e8fcc8a89bc21d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b47b1e5505f07d6d66dc0f1e616eeb1f323dd668f4c8eab8e8fcc8a89bc21d->enter($__internal_c3b47b1e5505f07d6d66dc0f1e616eeb1f323dd668f4c8eab8e8fcc8a89bc21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_dda515a90ce18bc0f54b3b048fab95627679a68c89ee9d744867353ed394c31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda515a90ce18bc0f54b3b048fab95627679a68c89ee9d744867353ed394c31b->enter($__internal_dda515a90ce18bc0f54b3b048fab95627679a68c89ee9d744867353ed394c31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c3b47b1e5505f07d6d66dc0f1e616eeb1f323dd668f4c8eab8e8fcc8a89bc21d->leave($__internal_c3b47b1e5505f07d6d66dc0f1e616eeb1f323dd668f4c8eab8e8fcc8a89bc21d_prof);

        
        $__internal_dda515a90ce18bc0f54b3b048fab95627679a68c89ee9d744867353ed394c31b->leave($__internal_dda515a90ce18bc0f54b3b048fab95627679a68c89ee9d744867353ed394c31b_prof);

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
