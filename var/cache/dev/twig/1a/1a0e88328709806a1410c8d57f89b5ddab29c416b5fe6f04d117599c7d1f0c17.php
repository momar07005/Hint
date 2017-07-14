<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_82c5777a783fe5d11db384351990f0d8a28981e1830bfa370e13b292f25eacf0 extends Twig_Template
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
        $__internal_e86e46815beadc73b0d6d4d92b003d034139eab1553c7a3e81b5eaa625e59000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86e46815beadc73b0d6d4d92b003d034139eab1553c7a3e81b5eaa625e59000->enter($__internal_e86e46815beadc73b0d6d4d92b003d034139eab1553c7a3e81b5eaa625e59000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_f178e962b6f396133e6d4cf6c40832b5f5236301d16798670192f244c5da383b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f178e962b6f396133e6d4cf6c40832b5f5236301d16798670192f244c5da383b->enter($__internal_f178e962b6f396133e6d4cf6c40832b5f5236301d16798670192f244c5da383b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e86e46815beadc73b0d6d4d92b003d034139eab1553c7a3e81b5eaa625e59000->leave($__internal_e86e46815beadc73b0d6d4d92b003d034139eab1553c7a3e81b5eaa625e59000_prof);

        
        $__internal_f178e962b6f396133e6d4cf6c40832b5f5236301d16798670192f244c5da383b->leave($__internal_f178e962b6f396133e6d4cf6c40832b5f5236301d16798670192f244c5da383b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
