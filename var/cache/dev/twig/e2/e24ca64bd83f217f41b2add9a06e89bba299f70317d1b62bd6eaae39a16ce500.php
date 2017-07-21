<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_97d85ca10ebf31168253ee67d9dcbcf26b7ee153f124ec2f83a1e73f952dd6d5 extends Twig_Template
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
        $__internal_e625f17f84413d485a31b1eabbf6967b8615be1b7f40c566189e18263cf9f913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e625f17f84413d485a31b1eabbf6967b8615be1b7f40c566189e18263cf9f913->enter($__internal_e625f17f84413d485a31b1eabbf6967b8615be1b7f40c566189e18263cf9f913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_93c0581668652b09e279da8025ca84897f72506dfb09b8d81ddd2d09b15143ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c0581668652b09e279da8025ca84897f72506dfb09b8d81ddd2d09b15143ad->enter($__internal_93c0581668652b09e279da8025ca84897f72506dfb09b8d81ddd2d09b15143ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e625f17f84413d485a31b1eabbf6967b8615be1b7f40c566189e18263cf9f913->leave($__internal_e625f17f84413d485a31b1eabbf6967b8615be1b7f40c566189e18263cf9f913_prof);

        
        $__internal_93c0581668652b09e279da8025ca84897f72506dfb09b8d81ddd2d09b15143ad->leave($__internal_93c0581668652b09e279da8025ca84897f72506dfb09b8d81ddd2d09b15143ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
