<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_eade06c18858a0a3d4629ee58473f385cab2bd638db1e0c9a549851a5e58e187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ceb614750d559f5bd10b28f29404117160ce26a8c8e093d30869cafb4e77eea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb614750d559f5bd10b28f29404117160ce26a8c8e093d30869cafb4e77eea8->enter($__internal_ceb614750d559f5bd10b28f29404117160ce26a8c8e093d30869cafb4e77eea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_505c006ea81a2a52dcb7f375690cd20e307c5d996bb7155d1e726b16316c2e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505c006ea81a2a52dcb7f375690cd20e307c5d996bb7155d1e726b16316c2e4c->enter($__internal_505c006ea81a2a52dcb7f375690cd20e307c5d996bb7155d1e726b16316c2e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceb614750d559f5bd10b28f29404117160ce26a8c8e093d30869cafb4e77eea8->leave($__internal_ceb614750d559f5bd10b28f29404117160ce26a8c8e093d30869cafb4e77eea8_prof);

        
        $__internal_505c006ea81a2a52dcb7f375690cd20e307c5d996bb7155d1e726b16316c2e4c->leave($__internal_505c006ea81a2a52dcb7f375690cd20e307c5d996bb7155d1e726b16316c2e4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_54bc3658f4a27eed87ae9d98f8de0144ae4ef852f4684af9706808ff6525f02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54bc3658f4a27eed87ae9d98f8de0144ae4ef852f4684af9706808ff6525f02d->enter($__internal_54bc3658f4a27eed87ae9d98f8de0144ae4ef852f4684af9706808ff6525f02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8bfaf5c11c6edb1e279adbf0699bfdea2fce7507f295694c52e6a681d7fae511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfaf5c11c6edb1e279adbf0699bfdea2fce7507f295694c52e6a681d7fae511->enter($__internal_8bfaf5c11c6edb1e279adbf0699bfdea2fce7507f295694c52e6a681d7fae511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_8bfaf5c11c6edb1e279adbf0699bfdea2fce7507f295694c52e6a681d7fae511->leave($__internal_8bfaf5c11c6edb1e279adbf0699bfdea2fce7507f295694c52e6a681d7fae511_prof);

        
        $__internal_54bc3658f4a27eed87ae9d98f8de0144ae4ef852f4684af9706808ff6525f02d->leave($__internal_54bc3658f4a27eed87ae9d98f8de0144ae4ef852f4684af9706808ff6525f02d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_85de66f006f14d4f5518be5d866efa39e6f3fd75dfe265a7487952ae472a4758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85de66f006f14d4f5518be5d866efa39e6f3fd75dfe265a7487952ae472a4758->enter($__internal_85de66f006f14d4f5518be5d866efa39e6f3fd75dfe265a7487952ae472a4758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_83c1d543f88140b0449e884e343bab663c629c239c867e1405e7839696373eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c1d543f88140b0449e884e343bab663c629c239c867e1405e7839696373eea->enter($__internal_83c1d543f88140b0449e884e343bab663c629c239c867e1405e7839696373eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_83c1d543f88140b0449e884e343bab663c629c239c867e1405e7839696373eea->leave($__internal_83c1d543f88140b0449e884e343bab663c629c239c867e1405e7839696373eea_prof);

        
        $__internal_85de66f006f14d4f5518be5d866efa39e6f3fd75dfe265a7487952ae472a4758->leave($__internal_85de66f006f14d4f5518be5d866efa39e6f3fd75dfe265a7487952ae472a4758_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d723bcec070bcb3346ffc2de6797c97d2d06e75db0387b25261802b8cd3a8443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d723bcec070bcb3346ffc2de6797c97d2d06e75db0387b25261802b8cd3a8443->enter($__internal_d723bcec070bcb3346ffc2de6797c97d2d06e75db0387b25261802b8cd3a8443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75e98c8165366463eedb448054beaf21a3bef3aee284b4a3b173238a5cd91609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e98c8165366463eedb448054beaf21a3bef3aee284b4a3b173238a5cd91609->enter($__internal_75e98c8165366463eedb448054beaf21a3bef3aee284b4a3b173238a5cd91609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_75e98c8165366463eedb448054beaf21a3bef3aee284b4a3b173238a5cd91609->leave($__internal_75e98c8165366463eedb448054beaf21a3bef3aee284b4a3b173238a5cd91609_prof);

        
        $__internal_d723bcec070bcb3346ffc2de6797c97d2d06e75db0387b25261802b8cd3a8443->leave($__internal_d723bcec070bcb3346ffc2de6797c97d2d06e75db0387b25261802b8cd3a8443_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
