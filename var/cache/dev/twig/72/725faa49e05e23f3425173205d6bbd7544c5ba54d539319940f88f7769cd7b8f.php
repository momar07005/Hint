<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_9142e69960790d208c02f39bc03b0c150d6f10710ea4e1564a682fb1c5b02ec7 extends Twig_Template
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
        $__internal_698ee165858c1c99d0efecd1d8827f854662001e83ef00fbebece8cc655185ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698ee165858c1c99d0efecd1d8827f854662001e83ef00fbebece8cc655185ee->enter($__internal_698ee165858c1c99d0efecd1d8827f854662001e83ef00fbebece8cc655185ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e0d8a4b80753f6febc7dfe18f78818c9c8499ddcc98c6249c9c81ce211186d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d8a4b80753f6febc7dfe18f78818c9c8499ddcc98c6249c9c81ce211186d86->enter($__internal_e0d8a4b80753f6febc7dfe18f78818c9c8499ddcc98c6249c9c81ce211186d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_698ee165858c1c99d0efecd1d8827f854662001e83ef00fbebece8cc655185ee->leave($__internal_698ee165858c1c99d0efecd1d8827f854662001e83ef00fbebece8cc655185ee_prof);

        
        $__internal_e0d8a4b80753f6febc7dfe18f78818c9c8499ddcc98c6249c9c81ce211186d86->leave($__internal_e0d8a4b80753f6febc7dfe18f78818c9c8499ddcc98c6249c9c81ce211186d86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
