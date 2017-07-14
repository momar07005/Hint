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
        $__internal_ee0783aca4fd6d9c7fa87e035b42379bfa7e7f92df58b10f4cdada90166cc6cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0783aca4fd6d9c7fa87e035b42379bfa7e7f92df58b10f4cdada90166cc6cf->enter($__internal_ee0783aca4fd6d9c7fa87e035b42379bfa7e7f92df58b10f4cdada90166cc6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_561e977dcbf9d5ca46bffcdc73afee9cd87e0857f4f822f8190ccb5766e3b654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561e977dcbf9d5ca46bffcdc73afee9cd87e0857f4f822f8190ccb5766e3b654->enter($__internal_561e977dcbf9d5ca46bffcdc73afee9cd87e0857f4f822f8190ccb5766e3b654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        kdkdkd
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_ee0783aca4fd6d9c7fa87e035b42379bfa7e7f92df58b10f4cdada90166cc6cf->leave($__internal_ee0783aca4fd6d9c7fa87e035b42379bfa7e7f92df58b10f4cdada90166cc6cf_prof);

        
        $__internal_561e977dcbf9d5ca46bffcdc73afee9cd87e0857f4f822f8190ccb5766e3b654->leave($__internal_561e977dcbf9d5ca46bffcdc73afee9cd87e0857f4f822f8190ccb5766e3b654_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_61a0da4c4fd2afa7e8b588df7ffe0578ff4733d032b92a62b8e091cb1cf47555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a0da4c4fd2afa7e8b588df7ffe0578ff4733d032b92a62b8e091cb1cf47555->enter($__internal_61a0da4c4fd2afa7e8b588df7ffe0578ff4733d032b92a62b8e091cb1cf47555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_328cd90b8a79aa72aa34337ac363ed768b784c45b33165f697bbaa15b2d7b0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328cd90b8a79aa72aa34337ac363ed768b784c45b33165f697bbaa15b2d7b0b5->enter($__internal_328cd90b8a79aa72aa34337ac363ed768b784c45b33165f697bbaa15b2d7b0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_328cd90b8a79aa72aa34337ac363ed768b784c45b33165f697bbaa15b2d7b0b5->leave($__internal_328cd90b8a79aa72aa34337ac363ed768b784c45b33165f697bbaa15b2d7b0b5_prof);

        
        $__internal_61a0da4c4fd2afa7e8b588df7ffe0578ff4733d032b92a62b8e091cb1cf47555->leave($__internal_61a0da4c4fd2afa7e8b588df7ffe0578ff4733d032b92a62b8e091cb1cf47555_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b874a37f44fe8fa27c78d9460f2b88781204be26ba345262cdb248e6eacd7475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b874a37f44fe8fa27c78d9460f2b88781204be26ba345262cdb248e6eacd7475->enter($__internal_b874a37f44fe8fa27c78d9460f2b88781204be26ba345262cdb248e6eacd7475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_12f54390162e5d6582fccd44ba2ea62259add3ff245ede18b0d0b7297eccfcf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f54390162e5d6582fccd44ba2ea62259add3ff245ede18b0d0b7297eccfcf2->enter($__internal_12f54390162e5d6582fccd44ba2ea62259add3ff245ede18b0d0b7297eccfcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_12f54390162e5d6582fccd44ba2ea62259add3ff245ede18b0d0b7297eccfcf2->leave($__internal_12f54390162e5d6582fccd44ba2ea62259add3ff245ede18b0d0b7297eccfcf2_prof);

        
        $__internal_b874a37f44fe8fa27c78d9460f2b88781204be26ba345262cdb248e6eacd7475->leave($__internal_b874a37f44fe8fa27c78d9460f2b88781204be26ba345262cdb248e6eacd7475_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_496689d25182099cebae6c527ee844cbe122c3426054b82a0c2694f655e535aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496689d25182099cebae6c527ee844cbe122c3426054b82a0c2694f655e535aa->enter($__internal_496689d25182099cebae6c527ee844cbe122c3426054b82a0c2694f655e535aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee93c9c91ecdf173e109ccf70cff3d773cf6ef02edf1b1a10420e1ef916c4487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee93c9c91ecdf173e109ccf70cff3d773cf6ef02edf1b1a10420e1ef916c4487->enter($__internal_ee93c9c91ecdf173e109ccf70cff3d773cf6ef02edf1b1a10420e1ef916c4487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ee93c9c91ecdf173e109ccf70cff3d773cf6ef02edf1b1a10420e1ef916c4487->leave($__internal_ee93c9c91ecdf173e109ccf70cff3d773cf6ef02edf1b1a10420e1ef916c4487_prof);

        
        $__internal_496689d25182099cebae6c527ee844cbe122c3426054b82a0c2694f655e535aa->leave($__internal_496689d25182099cebae6c527ee844cbe122c3426054b82a0c2694f655e535aa_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a7f454cee838871d28e5d58ef39b97ac917dc131c1173337b868416e93d70a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7f454cee838871d28e5d58ef39b97ac917dc131c1173337b868416e93d70a5->enter($__internal_9a7f454cee838871d28e5d58ef39b97ac917dc131c1173337b868416e93d70a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_282c6590cc660f09ccd1222b3610582883419a1faa6d2e4b062db2de2faee354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282c6590cc660f09ccd1222b3610582883419a1faa6d2e4b062db2de2faee354->enter($__internal_282c6590cc660f09ccd1222b3610582883419a1faa6d2e4b062db2de2faee354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_282c6590cc660f09ccd1222b3610582883419a1faa6d2e4b062db2de2faee354->leave($__internal_282c6590cc660f09ccd1222b3610582883419a1faa6d2e4b062db2de2faee354_prof);

        
        $__internal_9a7f454cee838871d28e5d58ef39b97ac917dc131c1173337b868416e93d70a5->leave($__internal_9a7f454cee838871d28e5d58ef39b97ac917dc131c1173337b868416e93d70a5_prof);

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
        return array (  118 => 12,  101 => 11,  84 => 6,  66 => 5,  54 => 13,  51 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        kdkdkd
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/views/base.html.twig");
    }
}
