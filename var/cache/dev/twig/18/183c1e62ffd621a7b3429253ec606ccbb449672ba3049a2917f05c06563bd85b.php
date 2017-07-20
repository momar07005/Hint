<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_0409da11edb95d82fc4aabaa165503621f0ca5e5475a0bc28ce6ae63f6882937 extends Twig_Template
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
        $__internal_9e11add7b6163870f4a56273b49c2f0c4e8c8237863ff728d8e331dc032f0506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e11add7b6163870f4a56273b49c2f0c4e8c8237863ff728d8e331dc032f0506->enter($__internal_9e11add7b6163870f4a56273b49c2f0c4e8c8237863ff728d8e331dc032f0506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_4cc5453e05c9caf22a18e122d275bd8b7ea9dad87d48f978d6e6f46fcbaf2d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc5453e05c9caf22a18e122d275bd8b7ea9dad87d48f978d6e6f46fcbaf2d1f->enter($__internal_4cc5453e05c9caf22a18e122d275bd8b7ea9dad87d48f978d6e6f46fcbaf2d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9e11add7b6163870f4a56273b49c2f0c4e8c8237863ff728d8e331dc032f0506->leave($__internal_9e11add7b6163870f4a56273b49c2f0c4e8c8237863ff728d8e331dc032f0506_prof);

        
        $__internal_4cc5453e05c9caf22a18e122d275bd8b7ea9dad87d48f978d6e6f46fcbaf2d1f->leave($__internal_4cc5453e05c9caf22a18e122d275bd8b7ea9dad87d48f978d6e6f46fcbaf2d1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
