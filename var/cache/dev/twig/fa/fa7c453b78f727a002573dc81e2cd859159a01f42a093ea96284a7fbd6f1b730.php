<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_5c36b681554bbe0981b188001346dc620dad32df7c14b57751e050a6b22b1b9f extends Twig_Template
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
        $__internal_d8a9262b26e2baf42da154b72b45ce77d3cb30ba0cc76d12fa87e848a46e06ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a9262b26e2baf42da154b72b45ce77d3cb30ba0cc76d12fa87e848a46e06ca->enter($__internal_d8a9262b26e2baf42da154b72b45ce77d3cb30ba0cc76d12fa87e848a46e06ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_fea39bc916d7587257ac9487c284f6e5bad0ca2b92073bfa70737b5032b74962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea39bc916d7587257ac9487c284f6e5bad0ca2b92073bfa70737b5032b74962->enter($__internal_fea39bc916d7587257ac9487c284f6e5bad0ca2b92073bfa70737b5032b74962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d8a9262b26e2baf42da154b72b45ce77d3cb30ba0cc76d12fa87e848a46e06ca->leave($__internal_d8a9262b26e2baf42da154b72b45ce77d3cb30ba0cc76d12fa87e848a46e06ca_prof);

        
        $__internal_fea39bc916d7587257ac9487c284f6e5bad0ca2b92073bfa70737b5032b74962->leave($__internal_fea39bc916d7587257ac9487c284f6e5bad0ca2b92073bfa70737b5032b74962_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
