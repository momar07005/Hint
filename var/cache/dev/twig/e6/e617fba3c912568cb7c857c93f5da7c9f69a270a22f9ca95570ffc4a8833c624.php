<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_18e70cf6082e5a9c1ae5a563b81977dab0c413071a5291391f557b2068010fbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a56cacd7781326dc7f8aceb81d253bb37037969722999b43215ced9276a6453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a56cacd7781326dc7f8aceb81d253bb37037969722999b43215ced9276a6453->enter($__internal_5a56cacd7781326dc7f8aceb81d253bb37037969722999b43215ced9276a6453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_237a3b314c25a0488bafef6774f202a6840207be45ada97426dc461113e299ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237a3b314c25a0488bafef6774f202a6840207be45ada97426dc461113e299ce->enter($__internal_237a3b314c25a0488bafef6774f202a6840207be45ada97426dc461113e299ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_5a56cacd7781326dc7f8aceb81d253bb37037969722999b43215ced9276a6453->leave($__internal_5a56cacd7781326dc7f8aceb81d253bb37037969722999b43215ced9276a6453_prof);

        
        $__internal_237a3b314c25a0488bafef6774f202a6840207be45ada97426dc461113e299ce->leave($__internal_237a3b314c25a0488bafef6774f202a6840207be45ada97426dc461113e299ce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9eea08546aa107077ce4592ec5da0002d3f5bfa6e45876c96323ab62bb1f693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9eea08546aa107077ce4592ec5da0002d3f5bfa6e45876c96323ab62bb1f693->enter($__internal_c9eea08546aa107077ce4592ec5da0002d3f5bfa6e45876c96323ab62bb1f693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb8ecb1d4373d26f780c40b6562437af5c75b524f077e8de39744b2dc974909c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8ecb1d4373d26f780c40b6562437af5c75b524f077e8de39744b2dc974909c->enter($__internal_cb8ecb1d4373d26f780c40b6562437af5c75b524f077e8de39744b2dc974909c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cb8ecb1d4373d26f780c40b6562437af5c75b524f077e8de39744b2dc974909c->leave($__internal_cb8ecb1d4373d26f780c40b6562437af5c75b524f077e8de39744b2dc974909c_prof);

        
        $__internal_c9eea08546aa107077ce4592ec5da0002d3f5bfa6e45876c96323ab62bb1f693->leave($__internal_c9eea08546aa107077ce4592ec5da0002d3f5bfa6e45876c96323ab62bb1f693_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_056aae60da4f43a4f6e0ec0f0d81d4833645eda90bd0f5787c447ffa0266f850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_056aae60da4f43a4f6e0ec0f0d81d4833645eda90bd0f5787c447ffa0266f850->enter($__internal_056aae60da4f43a4f6e0ec0f0d81d4833645eda90bd0f5787c447ffa0266f850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85f2f94fd30f2d9876f18690b10089fd0a692341feb9e777b72e23241cf87666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f2f94fd30f2d9876f18690b10089fd0a692341feb9e777b72e23241cf87666->enter($__internal_85f2f94fd30f2d9876f18690b10089fd0a692341feb9e777b72e23241cf87666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_85f2f94fd30f2d9876f18690b10089fd0a692341feb9e777b72e23241cf87666->leave($__internal_85f2f94fd30f2d9876f18690b10089fd0a692341feb9e777b72e23241cf87666_prof);

        
        $__internal_056aae60da4f43a4f6e0ec0f0d81d4833645eda90bd0f5787c447ffa0266f850->leave($__internal_056aae60da4f43a4f6e0ec0f0d81d4833645eda90bd0f5787c447ffa0266f850_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb3d3c194ac1710106691df614ff2680abb33e4e3848e526cd44e455482c7495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3d3c194ac1710106691df614ff2680abb33e4e3848e526cd44e455482c7495->enter($__internal_eb3d3c194ac1710106691df614ff2680abb33e4e3848e526cd44e455482c7495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99f43de3cac1d8732632f88b33742ecb78df9b6ae79a36f19c0583ba9d31537d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f43de3cac1d8732632f88b33742ecb78df9b6ae79a36f19c0583ba9d31537d->enter($__internal_99f43de3cac1d8732632f88b33742ecb78df9b6ae79a36f19c0583ba9d31537d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_99f43de3cac1d8732632f88b33742ecb78df9b6ae79a36f19c0583ba9d31537d->leave($__internal_99f43de3cac1d8732632f88b33742ecb78df9b6ae79a36f19c0583ba9d31537d_prof);

        
        $__internal_eb3d3c194ac1710106691df614ff2680abb33e4e3848e526cd44e455482c7495->leave($__internal_eb3d3c194ac1710106691df614ff2680abb33e4e3848e526cd44e455482c7495_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
