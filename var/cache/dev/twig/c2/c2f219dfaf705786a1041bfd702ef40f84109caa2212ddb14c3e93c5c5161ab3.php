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
        $__internal_994a5be31367bb3ba9987a434772fffe9551f3f89214a4f668354e73f433a88c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994a5be31367bb3ba9987a434772fffe9551f3f89214a4f668354e73f433a88c->enter($__internal_994a5be31367bb3ba9987a434772fffe9551f3f89214a4f668354e73f433a88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_a6aceaca7f6b57049f3e9897f4fb5bf42052fae383bf18f9ce3981216450bf41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6aceaca7f6b57049f3e9897f4fb5bf42052fae383bf18f9ce3981216450bf41->enter($__internal_a6aceaca7f6b57049f3e9897f4fb5bf42052fae383bf18f9ce3981216450bf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_994a5be31367bb3ba9987a434772fffe9551f3f89214a4f668354e73f433a88c->leave($__internal_994a5be31367bb3ba9987a434772fffe9551f3f89214a4f668354e73f433a88c_prof);

        
        $__internal_a6aceaca7f6b57049f3e9897f4fb5bf42052fae383bf18f9ce3981216450bf41->leave($__internal_a6aceaca7f6b57049f3e9897f4fb5bf42052fae383bf18f9ce3981216450bf41_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_d9735f823990e63b740fa6f06c933440dd080723cb4e4a676931a3611882fe1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9735f823990e63b740fa6f06c933440dd080723cb4e4a676931a3611882fe1e->enter($__internal_d9735f823990e63b740fa6f06c933440dd080723cb4e4a676931a3611882fe1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d0a390ed58ded834a8baff913d83dc819d315b75677ab3c6f82b396c62e57346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a390ed58ded834a8baff913d83dc819d315b75677ab3c6f82b396c62e57346->enter($__internal_d0a390ed58ded834a8baff913d83dc819d315b75677ab3c6f82b396c62e57346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_d0a390ed58ded834a8baff913d83dc819d315b75677ab3c6f82b396c62e57346->leave($__internal_d0a390ed58ded834a8baff913d83dc819d315b75677ab3c6f82b396c62e57346_prof);

        
        $__internal_d9735f823990e63b740fa6f06c933440dd080723cb4e4a676931a3611882fe1e->leave($__internal_d9735f823990e63b740fa6f06c933440dd080723cb4e4a676931a3611882fe1e_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11c2d11de976eb3f3ac9fcdf8a2e0e56af595335b73ef9cad00aa3a2b32e8314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c2d11de976eb3f3ac9fcdf8a2e0e56af595335b73ef9cad00aa3a2b32e8314->enter($__internal_11c2d11de976eb3f3ac9fcdf8a2e0e56af595335b73ef9cad00aa3a2b32e8314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_316d15833d500c3c74abee2a1e1007aa3ceda090c10115bed0a33bb0513ffecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316d15833d500c3c74abee2a1e1007aa3ceda090c10115bed0a33bb0513ffecc->enter($__internal_316d15833d500c3c74abee2a1e1007aa3ceda090c10115bed0a33bb0513ffecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_316d15833d500c3c74abee2a1e1007aa3ceda090c10115bed0a33bb0513ffecc->leave($__internal_316d15833d500c3c74abee2a1e1007aa3ceda090c10115bed0a33bb0513ffecc_prof);

        
        $__internal_11c2d11de976eb3f3ac9fcdf8a2e0e56af595335b73ef9cad00aa3a2b32e8314->leave($__internal_11c2d11de976eb3f3ac9fcdf8a2e0e56af595335b73ef9cad00aa3a2b32e8314_prof);

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
