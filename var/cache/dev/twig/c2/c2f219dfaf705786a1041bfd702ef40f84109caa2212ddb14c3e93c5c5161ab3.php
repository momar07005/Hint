<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c333bae1b1a34d7ff8ac18ee5e86cf0621d23cadcbf52a4a8ab7c81adee25f78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default/index.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_1e5d1b997c39742c31be1271290364cf2ce78023900e4c151109014a7fb22202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5d1b997c39742c31be1271290364cf2ce78023900e4c151109014a7fb22202->enter($__internal_1e5d1b997c39742c31be1271290364cf2ce78023900e4c151109014a7fb22202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_37464aa15da8be3a49d890dbd1823a420306eb23e6a3afcdd69055e5a32fb9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37464aa15da8be3a49d890dbd1823a420306eb23e6a3afcdd69055e5a32fb9e8->enter($__internal_37464aa15da8be3a49d890dbd1823a420306eb23e6a3afcdd69055e5a32fb9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e5d1b997c39742c31be1271290364cf2ce78023900e4c151109014a7fb22202->leave($__internal_1e5d1b997c39742c31be1271290364cf2ce78023900e4c151109014a7fb22202_prof);

        
        $__internal_37464aa15da8be3a49d890dbd1823a420306eb23e6a3afcdd69055e5a32fb9e8->leave($__internal_37464aa15da8be3a49d890dbd1823a420306eb23e6a3afcdd69055e5a32fb9e8_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_0484a30297607c681527a92547afa7be93cedd1f6c4a0c3a4f272424cb2c78a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0484a30297607c681527a92547afa7be93cedd1f6c4a0c3a4f272424cb2c78a1->enter($__internal_0484a30297607c681527a92547afa7be93cedd1f6c4a0c3a4f272424cb2c78a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9881e812ce14dbd3895f81c58ef017ae7884aed00dc2baa22a1f449bb3e27285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9881e812ce14dbd3895f81c58ef017ae7884aed00dc2baa22a1f449bb3e27285->enter($__internal_9881e812ce14dbd3895f81c58ef017ae7884aed00dc2baa22a1f449bb3e27285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9881e812ce14dbd3895f81c58ef017ae7884aed00dc2baa22a1f449bb3e27285->leave($__internal_9881e812ce14dbd3895f81c58ef017ae7884aed00dc2baa22a1f449bb3e27285_prof);

        
        $__internal_0484a30297607c681527a92547afa7be93cedd1f6c4a0c3a4f272424cb2c78a1->leave($__internal_0484a30297607c681527a92547afa7be93cedd1f6c4a0c3a4f272424cb2c78a1_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ce254dfac2b5eef010e571e817e3cbbcf6850197a66d80b852843f74df1a2f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ce254dfac2b5eef010e571e817e3cbbcf6850197a66d80b852843f74df1a2f5->enter($__internal_4ce254dfac2b5eef010e571e817e3cbbcf6850197a66d80b852843f74df1a2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d7d3063a083b6b714ece441a64490a2c8e5a08d75076dbf42f6b803c8030c2a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d3063a083b6b714ece441a64490a2c8e5a08d75076dbf42f6b803c8030c2a8->enter($__internal_d7d3063a083b6b714ece441a64490a2c8e5a08d75076dbf42f6b803c8030c2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_d7d3063a083b6b714ece441a64490a2c8e5a08d75076dbf42f6b803c8030c2a8->leave($__internal_d7d3063a083b6b714ece441a64490a2c8e5a08d75076dbf42f6b803c8030c2a8_prof);

        
        $__internal_4ce254dfac2b5eef010e571e817e3cbbcf6850197a66d80b852843f74df1a2f5->leave($__internal_4ce254dfac2b5eef010e571e817e3cbbcf6850197a66d80b852843f74df1a2f5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
", "FOSUserBundle::layout.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
