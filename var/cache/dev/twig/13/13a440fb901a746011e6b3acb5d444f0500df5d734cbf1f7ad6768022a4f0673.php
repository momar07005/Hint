<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_95eda341faab5cb2d88262f92795662f7246eb4847c62e7f91e77325ba43be29 extends Twig_Template
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
        $__internal_b0661d8d9f8574e2b58a54373ad7aa9b39d68e3a40abfd4bacb3850eeb4109eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0661d8d9f8574e2b58a54373ad7aa9b39d68e3a40abfd4bacb3850eeb4109eb->enter($__internal_b0661d8d9f8574e2b58a54373ad7aa9b39d68e3a40abfd4bacb3850eeb4109eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b4203ce606228a90a184528bcd6313dffe154a317606f16236f5c072066cb475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4203ce606228a90a184528bcd6313dffe154a317606f16236f5c072066cb475->enter($__internal_b4203ce606228a90a184528bcd6313dffe154a317606f16236f5c072066cb475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b0661d8d9f8574e2b58a54373ad7aa9b39d68e3a40abfd4bacb3850eeb4109eb->leave($__internal_b0661d8d9f8574e2b58a54373ad7aa9b39d68e3a40abfd4bacb3850eeb4109eb_prof);

        
        $__internal_b4203ce606228a90a184528bcd6313dffe154a317606f16236f5c072066cb475->leave($__internal_b4203ce606228a90a184528bcd6313dffe154a317606f16236f5c072066cb475_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
