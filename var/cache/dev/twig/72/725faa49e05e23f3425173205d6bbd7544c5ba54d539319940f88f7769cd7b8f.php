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
        $__internal_0b47259a1fb6ea0b0a069ed5c15c5e4f59cefc698e1d1225b7712959205faff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b47259a1fb6ea0b0a069ed5c15c5e4f59cefc698e1d1225b7712959205faff3->enter($__internal_0b47259a1fb6ea0b0a069ed5c15c5e4f59cefc698e1d1225b7712959205faff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_91bd3896cdcf9da92a477fda64d0181649ce70a3644e3baff5e5c040c1fb7f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91bd3896cdcf9da92a477fda64d0181649ce70a3644e3baff5e5c040c1fb7f91->enter($__internal_91bd3896cdcf9da92a477fda64d0181649ce70a3644e3baff5e5c040c1fb7f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0b47259a1fb6ea0b0a069ed5c15c5e4f59cefc698e1d1225b7712959205faff3->leave($__internal_0b47259a1fb6ea0b0a069ed5c15c5e4f59cefc698e1d1225b7712959205faff3_prof);

        
        $__internal_91bd3896cdcf9da92a477fda64d0181649ce70a3644e3baff5e5c040c1fb7f91->leave($__internal_91bd3896cdcf9da92a477fda64d0181649ce70a3644e3baff5e5c040c1fb7f91_prof);

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
