<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mod_page_reset-password.phtml */
class __TwigTemplate_deac93af629703454b6800f33f1599fccffe62cddf838f5a8c4236697017ee6c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_page_reset-password.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_page_reset-password.phtml", 3)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Reset password");
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"icon-mail\"></span></div>
            <h2>";
        // line 12
        echo gettext("How to reset my password?");
        echo "</h2>
            <p>";
        // line 13
        echo gettext("Enter your email to reset password. You will receive new password after reset link is confirmed.");
        echo "</p>
        </div>
        <div class=\"block\">
            <form action=\"\" method=\"post\" id=\"password-reset\">
                <fieldset>
                    <legend>";
        // line 18
        echo gettext("Reset password");
        echo "</legend>
                    <label>";
        // line 19
        echo gettext("Email Address");
        echo ": </label>
                    <input type=\"email\" name=\"email\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "\" required=\"required\">
                    <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 21
        echo gettext("Reset password");
        echo "\">
                </fieldset>
            </form>
        </div>
    </div>

";
    }

    // line 29
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('#password-reset').bind('submit',function(event){
        bb.post(
            'guest/client/reset_password',
            \$(this).serialize(),
            function(result) {
                bb.msg('";
        // line 37
        echo gettext("Password reset confirmation email was sent");
        echo "');
            }
        );
        return false;
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_page_reset-password.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 37,  106 => 30,  102 => 29,  91 => 21,  87 => 20,  83 => 19,  79 => 18,  71 => 13,  67 => 12,  61 => 8,  57 => 7,  50 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}

{% import \"macro_functions.phtml\" as mf %}

{% block meta_title %}{% trans 'Reset password' %}{% endblock %}

{% block content %}

    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"icon-mail\"></span></div>
            <h2>{% trans 'How to reset my password?' %}</h2>
            <p>{% trans 'Enter your email to reset password. You will receive new password after reset link is confirmed.' %}</p>
        </div>
        <div class=\"block\">
            <form action=\"\" method=\"post\" id=\"password-reset\">
                <fieldset>
                    <legend>{% trans 'Reset password' %}</legend>
                    <label>{% trans 'Email Address' %}: </label>
                    <input type=\"email\" name=\"email\" value=\"{{ request.email }}\" required=\"required\">
                    <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"{% trans 'Reset password' %}\">
                </fieldset>
            </form>
        </div>
    </div>

{% endblock %}

{% block js %}
<script type=\"text/javascript\">
\$(function() {
    \$('#password-reset').bind('submit',function(event){
        bb.post(
            'guest/client/reset_password',
            \$(this).serialize(),
            function(result) {
                bb.msg('{% trans \"Password reset confirmation email was sent\" %}');
            }
        );
        return false;
    });
});
</script>
{% endblock %}", "mod_page_reset-password.phtml", "/var/www/html/bb-themes/boxbilling/html/mod_page_reset-password.phtml");
    }
}
