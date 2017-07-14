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
        $__internal_7a0d81ae72587a581dac13c209e0648df180a229eb8ad015a1fe0c9cc20d4e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a0d81ae72587a581dac13c209e0648df180a229eb8ad015a1fe0c9cc20d4e56->enter($__internal_7a0d81ae72587a581dac13c209e0648df180a229eb8ad015a1fe0c9cc20d4e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f695556965ae744fe2784d31b33c7b1facf274e9b675beae5b4ededb7cd24e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f695556965ae744fe2784d31b33c7b1facf274e9b675beae5b4ededb7cd24e8b->enter($__internal_f695556965ae744fe2784d31b33c7b1facf274e9b675beae5b4ededb7cd24e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7a0d81ae72587a581dac13c209e0648df180a229eb8ad015a1fe0c9cc20d4e56->leave($__internal_7a0d81ae72587a581dac13c209e0648df180a229eb8ad015a1fe0c9cc20d4e56_prof);

        
        $__internal_f695556965ae744fe2784d31b33c7b1facf274e9b675beae5b4ededb7cd24e8b->leave($__internal_f695556965ae744fe2784d31b33c7b1facf274e9b675beae5b4ededb7cd24e8b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_22be2bcbe2a27f0c0c58891ca3bfbd107f027e29461173f519c94b94936b1315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22be2bcbe2a27f0c0c58891ca3bfbd107f027e29461173f519c94b94936b1315->enter($__internal_22be2bcbe2a27f0c0c58891ca3bfbd107f027e29461173f519c94b94936b1315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd53e30e54ead087b95c5dcd0baf4957ae5368b4d4994bd0f720d6c41e515d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd53e30e54ead087b95c5dcd0baf4957ae5368b4d4994bd0f720d6c41e515d55->enter($__internal_fd53e30e54ead087b95c5dcd0baf4957ae5368b4d4994bd0f720d6c41e515d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fd53e30e54ead087b95c5dcd0baf4957ae5368b4d4994bd0f720d6c41e515d55->leave($__internal_fd53e30e54ead087b95c5dcd0baf4957ae5368b4d4994bd0f720d6c41e515d55_prof);

        
        $__internal_22be2bcbe2a27f0c0c58891ca3bfbd107f027e29461173f519c94b94936b1315->leave($__internal_22be2bcbe2a27f0c0c58891ca3bfbd107f027e29461173f519c94b94936b1315_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d431df89c384ee3e9e83188a40aea0afc43cef41fbe884643266b668ada79168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d431df89c384ee3e9e83188a40aea0afc43cef41fbe884643266b668ada79168->enter($__internal_d431df89c384ee3e9e83188a40aea0afc43cef41fbe884643266b668ada79168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_273f589237d1694e9a96fc14a1d22ceee4a8fd5f0d36cf1baae69b4d680b249b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273f589237d1694e9a96fc14a1d22ceee4a8fd5f0d36cf1baae69b4d680b249b->enter($__internal_273f589237d1694e9a96fc14a1d22ceee4a8fd5f0d36cf1baae69b4d680b249b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_273f589237d1694e9a96fc14a1d22ceee4a8fd5f0d36cf1baae69b4d680b249b->leave($__internal_273f589237d1694e9a96fc14a1d22ceee4a8fd5f0d36cf1baae69b4d680b249b_prof);

        
        $__internal_d431df89c384ee3e9e83188a40aea0afc43cef41fbe884643266b668ada79168->leave($__internal_d431df89c384ee3e9e83188a40aea0afc43cef41fbe884643266b668ada79168_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_273ea41c9ccf99f943025d88c0f6052fcb6c14faa4bd1b8eabd582b002143c7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_273ea41c9ccf99f943025d88c0f6052fcb6c14faa4bd1b8eabd582b002143c7b->enter($__internal_273ea41c9ccf99f943025d88c0f6052fcb6c14faa4bd1b8eabd582b002143c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3c20b30994c9eef4f95fa8661e5cea3d28c20191d9db262943c920dd82de900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c20b30994c9eef4f95fa8661e5cea3d28c20191d9db262943c920dd82de900->enter($__internal_a3c20b30994c9eef4f95fa8661e5cea3d28c20191d9db262943c920dd82de900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a3c20b30994c9eef4f95fa8661e5cea3d28c20191d9db262943c920dd82de900->leave($__internal_a3c20b30994c9eef4f95fa8661e5cea3d28c20191d9db262943c920dd82de900_prof);

        
        $__internal_273ea41c9ccf99f943025d88c0f6052fcb6c14faa4bd1b8eabd582b002143c7b->leave($__internal_273ea41c9ccf99f943025d88c0f6052fcb6c14faa4bd1b8eabd582b002143c7b_prof);

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
