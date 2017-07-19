<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_58f85a23325ae2ae49ff09b9a7490fd7826d88f8443838bc423c4eb4cf9a7a35 extends Twig_Template
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
        $__internal_c37d0f05bf78f6945d664f648e1e0d7552ef910a929c794e3dd2ae4db96a1b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37d0f05bf78f6945d664f648e1e0d7552ef910a929c794e3dd2ae4db96a1b55->enter($__internal_c37d0f05bf78f6945d664f648e1e0d7552ef910a929c794e3dd2ae4db96a1b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b998b2e624b395dbae25dadd2e1e8b8b5179431ef4b44281fed4cbb6e9f78447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b998b2e624b395dbae25dadd2e1e8b8b5179431ef4b44281fed4cbb6e9f78447->enter($__internal_b998b2e624b395dbae25dadd2e1e8b8b5179431ef4b44281fed4cbb6e9f78447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c37d0f05bf78f6945d664f648e1e0d7552ef910a929c794e3dd2ae4db96a1b55->leave($__internal_c37d0f05bf78f6945d664f648e1e0d7552ef910a929c794e3dd2ae4db96a1b55_prof);

        
        $__internal_b998b2e624b395dbae25dadd2e1e8b8b5179431ef4b44281fed4cbb6e9f78447->leave($__internal_b998b2e624b395dbae25dadd2e1e8b8b5179431ef4b44281fed4cbb6e9f78447_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
