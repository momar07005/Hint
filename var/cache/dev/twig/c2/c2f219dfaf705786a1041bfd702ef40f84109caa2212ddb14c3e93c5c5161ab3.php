<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c333bae1b1a34d7ff8ac18ee5e86cf0621d23cadcbf52a4a8ab7c81adee25f78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default/index.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd26dc448471ccdb41d82e1cd203c86c2a682596a0a90dcf93620f75d76fce74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd26dc448471ccdb41d82e1cd203c86c2a682596a0a90dcf93620f75d76fce74->enter($__internal_cd26dc448471ccdb41d82e1cd203c86c2a682596a0a90dcf93620f75d76fce74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_11a6522d9e6171aac1d38a106331997647231fe78b02506802a6fa64e9b0f06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a6522d9e6171aac1d38a106331997647231fe78b02506802a6fa64e9b0f06d->enter($__internal_11a6522d9e6171aac1d38a106331997647231fe78b02506802a6fa64e9b0f06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd26dc448471ccdb41d82e1cd203c86c2a682596a0a90dcf93620f75d76fce74->leave($__internal_cd26dc448471ccdb41d82e1cd203c86c2a682596a0a90dcf93620f75d76fce74_prof);

        
        $__internal_11a6522d9e6171aac1d38a106331997647231fe78b02506802a6fa64e9b0f06d->leave($__internal_11a6522d9e6171aac1d38a106331997647231fe78b02506802a6fa64e9b0f06d_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_ff7dacbb06298c320c57b18f626187ca9d7e4fa7a0c22c07c7e0e92a57b69baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7dacbb06298c320c57b18f626187ca9d7e4fa7a0c22c07c7e0e92a57b69baf->enter($__internal_ff7dacbb06298c320c57b18f626187ca9d7e4fa7a0c22c07c7e0e92a57b69baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_be4c8fa5122c29ef1904b1fc9b29f8fb7e0ef091e5bd1bdc685dae59e76cdf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4c8fa5122c29ef1904b1fc9b29f8fb7e0ef091e5bd1bdc685dae59e76cdf0b->enter($__internal_be4c8fa5122c29ef1904b1fc9b29f8fb7e0ef091e5bd1bdc685dae59e76cdf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 4
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 5
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 6
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 7
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        ";
        }
        // line 12
        echo "
        <div>
            ";
        // line 14
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 16
        echo "        </div>
    </script>
    ";
        
        $__internal_be4c8fa5122c29ef1904b1fc9b29f8fb7e0ef091e5bd1bdc685dae59e76cdf0b->leave($__internal_be4c8fa5122c29ef1904b1fc9b29f8fb7e0ef091e5bd1bdc685dae59e76cdf0b_prof);

        
        $__internal_ff7dacbb06298c320c57b18f626187ca9d7e4fa7a0c22c07c7e0e92a57b69baf->leave($__internal_ff7dacbb06298c320c57b18f626187ca9d7e4fa7a0c22c07c7e0e92a57b69baf_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aac3ebaa492c3c4cac92b57d10a579245c9d0d39bfc98e4e857d5087e116a280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac3ebaa492c3c4cac92b57d10a579245c9d0d39bfc98e4e857d5087e116a280->enter($__internal_aac3ebaa492c3c4cac92b57d10a579245c9d0d39bfc98e4e857d5087e116a280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5e390fe114ba623c958e05c6063292fc984c41dcf288c1a1bb54449b1b9b8011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e390fe114ba623c958e05c6063292fc984c41dcf288c1a1bb54449b1b9b8011->enter($__internal_5e390fe114ba623c958e05c6063292fc984c41dcf288c1a1bb54449b1b9b8011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_5e390fe114ba623c958e05c6063292fc984c41dcf288c1a1bb54449b1b9b8011->leave($__internal_5e390fe114ba623c958e05c6063292fc984c41dcf288c1a1bb54449b1b9b8011_prof);

        
        $__internal_aac3ebaa492c3c4cac92b57d10a579245c9d0d39bfc98e4e857d5087e116a280->leave($__internal_aac3ebaa492c3c4cac92b57d10a579245c9d0d39bfc98e4e857d5087e116a280_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 15,  104 => 14,  92 => 16,  90 => 14,  86 => 12,  83 => 11,  77 => 10,  68 => 7,  63 => 6,  58 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::default/index.html.twig\" %}
   {% block content %}
        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </script>
    {% endblock %}
", "@FOSUser/layout.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
