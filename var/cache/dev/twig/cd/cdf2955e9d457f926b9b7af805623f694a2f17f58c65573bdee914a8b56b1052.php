<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e7c91c9d0ecde01fc6d42cecc6b2c21c8bab4541fd77c37b4eb73172486f1fe7 extends Twig_Template
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
        $__internal_77aaac48c1a2840b11da0d87cedb1930c4713844ce2b04944b95afbbb46f65aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77aaac48c1a2840b11da0d87cedb1930c4713844ce2b04944b95afbbb46f65aa->enter($__internal_77aaac48c1a2840b11da0d87cedb1930c4713844ce2b04944b95afbbb46f65aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_209d5115c3b25cb21cff98ffefc6fe064c0768d92361fdbea277d225030e8625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209d5115c3b25cb21cff98ffefc6fe064c0768d92361fdbea277d225030e8625->enter($__internal_209d5115c3b25cb21cff98ffefc6fe064c0768d92361fdbea277d225030e8625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_77aaac48c1a2840b11da0d87cedb1930c4713844ce2b04944b95afbbb46f65aa->leave($__internal_77aaac48c1a2840b11da0d87cedb1930c4713844ce2b04944b95afbbb46f65aa_prof);

        
        $__internal_209d5115c3b25cb21cff98ffefc6fe064c0768d92361fdbea277d225030e8625->leave($__internal_209d5115c3b25cb21cff98ffefc6fe064c0768d92361fdbea277d225030e8625_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
