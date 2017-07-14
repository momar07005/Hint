<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_72566889ca6acda8c7e69f86e85d239f29278819048d37cdf38d902687da1b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "HWIOAuthBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cec50ea03dd6305898457258a21ef9c3429e3d503d6a807d19083ffc84e8244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cec50ea03dd6305898457258a21ef9c3429e3d503d6a807d19083ffc84e8244->enter($__internal_2cec50ea03dd6305898457258a21ef9c3429e3d503d6a807d19083ffc84e8244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $__internal_a951cc10d497a16fc74fcce186d543bdebbb8c67fe53e69875a5f4ed84e5feff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a951cc10d497a16fc74fcce186d543bdebbb8c67fe53e69875a5f4ed84e5feff->enter($__internal_a951cc10d497a16fc74fcce186d543bdebbb8c67fe53e69875a5f4ed84e5feff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cec50ea03dd6305898457258a21ef9c3429e3d503d6a807d19083ffc84e8244->leave($__internal_2cec50ea03dd6305898457258a21ef9c3429e3d503d6a807d19083ffc84e8244_prof);

        
        $__internal_a951cc10d497a16fc74fcce186d543bdebbb8c67fe53e69875a5f4ed84e5feff->leave($__internal_a951cc10d497a16fc74fcce186d543bdebbb8c67fe53e69875a5f4ed84e5feff_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_19c25fe06c9f9f883ad81d877cf7529be6c032173833e2d40ace1d95a7ea6163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c25fe06c9f9f883ad81d877cf7529be6c032173833e2d40ace1d95a7ea6163->enter($__internal_19c25fe06c9f9f883ad81d877cf7529be6c032173833e2d40ace1d95a7ea6163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c6bd2ad07bf91b2812557ddc2949ff68697d1f30941c8844301d13c8d561400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6bd2ad07bf91b2812557ddc2949ff68697d1f30941c8844301d13c8d561400->enter($__internal_5c6bd2ad07bf91b2812557ddc2949ff68697d1f30941c8844301d13c8d561400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "        <div>
            ";
        // line 4
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 6
        echo "        </div>
";
        
        $__internal_5c6bd2ad07bf91b2812557ddc2949ff68697d1f30941c8844301d13c8d561400->leave($__internal_5c6bd2ad07bf91b2812557ddc2949ff68697d1f30941c8844301d13c8d561400_prof);

        
        $__internal_19c25fe06c9f9f883ad81d877cf7529be6c032173833e2d40ace1d95a7ea6163->leave($__internal_19c25fe06c9f9f883ad81d877cf7529be6c032173833e2d40ace1d95a7ea6163_prof);

    }

    // line 4
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_8f61229ac252fe774935e21bb8090f68942b642916ebc023eb369a871e2953e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f61229ac252fe774935e21bb8090f68942b642916ebc023eb369a871e2953e2->enter($__internal_8f61229ac252fe774935e21bb8090f68942b642916ebc023eb369a871e2953e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_165fa8fb9ba0e3e6f33476e59e20e0ae54699cdddcb40d4474fef327f6d7f66e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165fa8fb9ba0e3e6f33476e59e20e0ae54699cdddcb40d4474fef327f6d7f66e->enter($__internal_165fa8fb9ba0e3e6f33476e59e20e0ae54699cdddcb40d4474fef327f6d7f66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 5
        echo "            ";
        
        $__internal_165fa8fb9ba0e3e6f33476e59e20e0ae54699cdddcb40d4474fef327f6d7f66e->leave($__internal_165fa8fb9ba0e3e6f33476e59e20e0ae54699cdddcb40d4474fef327f6d7f66e_prof);

        
        $__internal_8f61229ac252fe774935e21bb8090f68942b642916ebc023eb369a871e2953e2->leave($__internal_8f61229ac252fe774935e21bb8090f68942b642916ebc023eb369a871e2953e2_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 5,  66 => 4,  55 => 6,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/index.html.twig' %}
{% block body %}
        <div>
            {% block hwi_oauth_content %}
            {% endblock hwi_oauth_content %}
        </div>
{% endblock %}", "HWIOAuthBundle::layout.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/HWIOAuthBundle/views/layout.html.twig");
    }
}
