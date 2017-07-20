<?php

/* base.html.twig */
class __TwigTemplate_06e88f8920e195ff52c3ee4b326f0552ff44fa1027145e1ca853a7059736c332 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6668d4c2c6384c6b07852138f45ca9fef5f76e59e0d80f232e1a121555731f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6668d4c2c6384c6b07852138f45ca9fef5f76e59e0d80f232e1a121555731f97->enter($__internal_6668d4c2c6384c6b07852138f45ca9fef5f76e59e0d80f232e1a121555731f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f425dcdbf5ce6f2ce5bc44cec6e767cced4173b7097bfc20f93a003b06e626b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f425dcdbf5ce6f2ce5bc44cec6e767cced4173b7097bfc20f93a003b06e626b4->enter($__internal_f425dcdbf5ce6f2ce5bc44cec6e767cced4173b7097bfc20f93a003b06e626b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head lang=fr>
        <meta charset=\"UTF-8\" />
        <meta name=\"language\" content=\"en\">
        <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0\"/>
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fichiers_css/headerFooter.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fichiers_css/body.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "        
    </body>
</html>
";
        
        $__internal_6668d4c2c6384c6b07852138f45ca9fef5f76e59e0d80f232e1a121555731f97->leave($__internal_6668d4c2c6384c6b07852138f45ca9fef5f76e59e0d80f232e1a121555731f97_prof);

        
        $__internal_f425dcdbf5ce6f2ce5bc44cec6e767cced4173b7097bfc20f93a003b06e626b4->leave($__internal_f425dcdbf5ce6f2ce5bc44cec6e767cced4173b7097bfc20f93a003b06e626b4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_04184f3340b3fb8df76561c3a38fb1f6d37f6d20ac5a45208add205699071c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04184f3340b3fb8df76561c3a38fb1f6d37f6d20ac5a45208add205699071c6c->enter($__internal_04184f3340b3fb8df76561c3a38fb1f6d37f6d20ac5a45208add205699071c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1202438ddde778d20b92e2a21a55abf1fd3b0ec09820620ef348af590e9c93cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1202438ddde778d20b92e2a21a55abf1fd3b0ec09820620ef348af590e9c93cd->enter($__internal_1202438ddde778d20b92e2a21a55abf1fd3b0ec09820620ef348af590e9c93cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hint";
        
        $__internal_1202438ddde778d20b92e2a21a55abf1fd3b0ec09820620ef348af590e9c93cd->leave($__internal_1202438ddde778d20b92e2a21a55abf1fd3b0ec09820620ef348af590e9c93cd_prof);

        
        $__internal_04184f3340b3fb8df76561c3a38fb1f6d37f6d20ac5a45208add205699071c6c->leave($__internal_04184f3340b3fb8df76561c3a38fb1f6d37f6d20ac5a45208add205699071c6c_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ccef25588e5e5724fe8d4414209af8250cb59efdda5fc849da8c5d53aaed80b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ccef25588e5e5724fe8d4414209af8250cb59efdda5fc849da8c5d53aaed80b->enter($__internal_3ccef25588e5e5724fe8d4414209af8250cb59efdda5fc849da8c5d53aaed80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4d6995740c41e395e159eb70f2628a023daf649c6814e7e7640f2ac3cd78e3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6995740c41e395e159eb70f2628a023daf649c6814e7e7640f2ac3cd78e3b4->enter($__internal_4d6995740c41e395e159eb70f2628a023daf649c6814e7e7640f2ac3cd78e3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4d6995740c41e395e159eb70f2628a023daf649c6814e7e7640f2ac3cd78e3b4->leave($__internal_4d6995740c41e395e159eb70f2628a023daf649c6814e7e7640f2ac3cd78e3b4_prof);

        
        $__internal_3ccef25588e5e5724fe8d4414209af8250cb59efdda5fc849da8c5d53aaed80b->leave($__internal_3ccef25588e5e5724fe8d4414209af8250cb59efdda5fc849da8c5d53aaed80b_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b4980d994db96da964d71164393f4f2fd9845b31ad59e31ca9561ef8da972fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b4980d994db96da964d71164393f4f2fd9845b31ad59e31ca9561ef8da972fe->enter($__internal_1b4980d994db96da964d71164393f4f2fd9845b31ad59e31ca9561ef8da972fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffb6266f8855130d6e72ad142c604287c89e4254ad2be8a46c88c0803051ee42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb6266f8855130d6e72ad142c604287c89e4254ad2be8a46c88c0803051ee42->enter($__internal_ffb6266f8855130d6e72ad142c604287c89e4254ad2be8a46c88c0803051ee42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ffb6266f8855130d6e72ad142c604287c89e4254ad2be8a46c88c0803051ee42->leave($__internal_ffb6266f8855130d6e72ad142c604287c89e4254ad2be8a46c88c0803051ee42_prof);

        
        $__internal_1b4980d994db96da964d71164393f4f2fd9845b31ad59e31ca9561ef8da972fe->leave($__internal_1b4980d994db96da964d71164393f4f2fd9845b31ad59e31ca9561ef8da972fe_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c4f16c73dba08f4782bae63c8eac41debcfb3fa786673d5c2444aeba34e1930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c4f16c73dba08f4782bae63c8eac41debcfb3fa786673d5c2444aeba34e1930->enter($__internal_2c4f16c73dba08f4782bae63c8eac41debcfb3fa786673d5c2444aeba34e1930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b473c4266b1f8301afeca5d2a49778dd603f27e81f518bbee370e32c2b9149a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b473c4266b1f8301afeca5d2a49778dd603f27e81f518bbee370e32c2b9149a0->enter($__internal_b473c4266b1f8301afeca5d2a49778dd603f27e81f518bbee370e32c2b9149a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b473c4266b1f8301afeca5d2a49778dd603f27e81f518bbee370e32c2b9149a0->leave($__internal_b473c4266b1f8301afeca5d2a49778dd603f27e81f518bbee370e32c2b9149a0_prof);

        
        $__internal_2c4f16c73dba08f4782bae63c8eac41debcfb3fa786673d5c2444aeba34e1930->leave($__internal_2c4f16c73dba08f4782bae63c8eac41debcfb3fa786673d5c2444aeba34e1930_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 19,  121 => 18,  104 => 8,  86 => 7,  73 => 20,  70 => 19,  68 => 18,  62 => 15,  58 => 14,  52 => 11,  48 => 10,  43 => 9,  41 => 8,  37 => 7,  29 => 1,);
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
    <head lang=fr>
        <meta charset=\"UTF-8\" />
        <meta name=\"language\" content=\"en\">
        <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0\"/>
        <title>{% block title %}Hint{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"stylesheet\" type=\"text/css\"  href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('fichiers_css/headerFooter.css') }}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('fichiers_css/body.css') }}\"/>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        
        <script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}\"></script>
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        
    </body>
</html>
", "base.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/views/base.html.twig");
    }
}
