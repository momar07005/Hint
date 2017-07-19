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
        $__internal_9be0c86fe7cc15dce5233aa1d2ef60f2449c510b5615978ce893cca2b73f9034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be0c86fe7cc15dce5233aa1d2ef60f2449c510b5615978ce893cca2b73f9034->enter($__internal_9be0c86fe7cc15dce5233aa1d2ef60f2449c510b5615978ce893cca2b73f9034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_3cd8792059f4b0b3ffec64c91fdc6c99e69f275ecd21604198645c1a8ac0d0f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd8792059f4b0b3ffec64c91fdc6c99e69f275ecd21604198645c1a8ac0d0f5->enter($__internal_3cd8792059f4b0b3ffec64c91fdc6c99e69f275ecd21604198645c1a8ac0d0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9be0c86fe7cc15dce5233aa1d2ef60f2449c510b5615978ce893cca2b73f9034->leave($__internal_9be0c86fe7cc15dce5233aa1d2ef60f2449c510b5615978ce893cca2b73f9034_prof);

        
        $__internal_3cd8792059f4b0b3ffec64c91fdc6c99e69f275ecd21604198645c1a8ac0d0f5->leave($__internal_3cd8792059f4b0b3ffec64c91fdc6c99e69f275ecd21604198645c1a8ac0d0f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_60a8700a82de81e2a3aa6dcf5656b5d8dad7e44d37e9021f44eae49624d7fae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a8700a82de81e2a3aa6dcf5656b5d8dad7e44d37e9021f44eae49624d7fae4->enter($__internal_60a8700a82de81e2a3aa6dcf5656b5d8dad7e44d37e9021f44eae49624d7fae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b6c9a868db5f63ccd676648027118d89a323ccdfc36b8a2a5e3a788ce9314de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6c9a868db5f63ccd676648027118d89a323ccdfc36b8a2a5e3a788ce9314de->enter($__internal_7b6c9a868db5f63ccd676648027118d89a323ccdfc36b8a2a5e3a788ce9314de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7b6c9a868db5f63ccd676648027118d89a323ccdfc36b8a2a5e3a788ce9314de->leave($__internal_7b6c9a868db5f63ccd676648027118d89a323ccdfc36b8a2a5e3a788ce9314de_prof);

        
        $__internal_60a8700a82de81e2a3aa6dcf5656b5d8dad7e44d37e9021f44eae49624d7fae4->leave($__internal_60a8700a82de81e2a3aa6dcf5656b5d8dad7e44d37e9021f44eae49624d7fae4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc28c3e665774cd3db0baa4f0bd8c43100e05f9286c6a723b0a97590d1df30fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc28c3e665774cd3db0baa4f0bd8c43100e05f9286c6a723b0a97590d1df30fd->enter($__internal_dc28c3e665774cd3db0baa4f0bd8c43100e05f9286c6a723b0a97590d1df30fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_609f40e8569ee4df916c4b8fe6bd41eeb794d6cbb075e77471df33b6fcd3f296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609f40e8569ee4df916c4b8fe6bd41eeb794d6cbb075e77471df33b6fcd3f296->enter($__internal_609f40e8569ee4df916c4b8fe6bd41eeb794d6cbb075e77471df33b6fcd3f296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_609f40e8569ee4df916c4b8fe6bd41eeb794d6cbb075e77471df33b6fcd3f296->leave($__internal_609f40e8569ee4df916c4b8fe6bd41eeb794d6cbb075e77471df33b6fcd3f296_prof);

        
        $__internal_dc28c3e665774cd3db0baa4f0bd8c43100e05f9286c6a723b0a97590d1df30fd->leave($__internal_dc28c3e665774cd3db0baa4f0bd8c43100e05f9286c6a723b0a97590d1df30fd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_775b13ff20f7d8047941007ae712e1fd9d3d93db7f7682d4171d36dbdc3eb3cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_775b13ff20f7d8047941007ae712e1fd9d3d93db7f7682d4171d36dbdc3eb3cd->enter($__internal_775b13ff20f7d8047941007ae712e1fd9d3d93db7f7682d4171d36dbdc3eb3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52c9ac617b273918fa830c29c60ea5d848ae94faa854b8ff74e4f9d08dc268d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c9ac617b273918fa830c29c60ea5d848ae94faa854b8ff74e4f9d08dc268d0->enter($__internal_52c9ac617b273918fa830c29c60ea5d848ae94faa854b8ff74e4f9d08dc268d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_52c9ac617b273918fa830c29c60ea5d848ae94faa854b8ff74e4f9d08dc268d0->leave($__internal_52c9ac617b273918fa830c29c60ea5d848ae94faa854b8ff74e4f9d08dc268d0_prof);

        
        $__internal_775b13ff20f7d8047941007ae712e1fd9d3d93db7f7682d4171d36dbdc3eb3cd->leave($__internal_775b13ff20f7d8047941007ae712e1fd9d3d93db7f7682d4171d36dbdc3eb3cd_prof);

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
