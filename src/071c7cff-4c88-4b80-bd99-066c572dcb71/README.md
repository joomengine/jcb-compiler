### JCB! Power
# class Structure (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Joomlamodule**

```uml
@startuml

class Structure  #Gold {
  # Module $module
  # Component $component
  # Config $config
  # Registry $registry
  # Dispenser $dispenser
  # Event $event
  # Counter $counter
  # Folder $folder
  # File $file
  # Files $files
  # TemplateData $templatedata
  + __construct(Module $module, Component $component, ...)
  + build() : void
  # getXML(object $module) : string
  # getCustomScriptField(array $fieldScriptBucket) : string
  # modulePath(object $module) : void
  # setMainModFile(object $module) : void
  # setCustomGet(object $module) : void
  # setHelperFile(object $module) : void
  # setMainXmlFile(object $module) : void
  # setDefaultFile(object $module) : void
  # setTemplateFiles(object $module) : void
  # setInstallScript(object $module) : void
  # setReadme(object $module) : void
  # setCssJsForm(object $module) : void
  # setCssForm(object $module, string $targetPath, ...) : void
  # setJsForm(object $module, string $targetPath, ...) : void
  # setForms(object $module) : void
  # setSQL(object $module) : void
  # setFiles(object $module) : void
  # setFolders(object $module) : void
  # setUrls(object $module) : void
}

note right of Structure::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Module $module
    Component $component
    Config $config
    Registry $registry
    Dispenser $dispenser
    Event $event
    Counter $counter
    Folder $folder
    File $file
    Files $files
    TemplateData $templatedata
end note

note left of Structure::build
  Build the Modules files, folders, url's and config

  since: 3.2.0
  return: void
end note

note right of Structure::getXML
  get the module xml template

  since: 3.2.0
  return: string
end note

note left of Structure::getCustomScriptField
  get the module admin custom script field

  since: 3.2.0
  return: string
end note

note right of Structure::modulePath
  Set the module path

  since: 3.2.0
  return: void
end note

note left of Structure::setMainModFile
  Set the main module file

  since: 3.2.0
  return: void
end note

note right of Structure::setCustomGet
  Set the custom get file

  since: 3.2.0
  return: void
end note

note left of Structure::setHelperFile
  Set the helper file

  since: 3.2.0
  return: void
end note

note right of Structure::setMainXmlFile
  Set the main XML file

  since: 3.2.0
  return: void
end note

note left of Structure::setDefaultFile
  Set the main default template file

  since: 3.2.0
  return: void
end note

note right of Structure::setTemplateFiles
  Set the additional template files

  since: 3.2.0
  return: void
end note

note left of Structure::setInstallScript
  Set the install script file

  since: 3.2.0
  return: void
end note

note right of Structure::setReadme
  Set the readme file

  since: 3.2.0
  return: void
end note

note left of Structure::setCssJsForm
  Set the css and javascript in form

  since: 3.2.0
  return: void
end note

note right of Structure::setCssForm
  Set the css in form

  since: 3.2.0
  return: void
  
  arguments:
    object $module
    string $targetPath
    array $bucket
end note

note left of Structure::setJsForm
  Set the javascript in form

  since: 3.2.0
  return: void
  
  arguments:
    object $module
    string $targetPath
    array $bucket
end note

note right of Structure::setForms
  Set the form folders and files as needed

  since: 3.2.0
  return: void
end note

note left of Structure::setSQL
  Set the sql stuff

  since: 3.2.0
  return: void
end note

note right of Structure::setFiles
  Set the files

  since: 3.2.0
  return: void
end note

note left of Structure::setFolders
  Set the folders

  since: 3.2.0
  return: void
end note

note right of Structure::setUrls
  Set the urls

  since: 3.2.0
  return: void
end note

@enduml
```

The **Power** feature in JCB allows you to write PHP classes and their implementations,
making it easy to include them in your Joomla project. JCB handles linking, autoloading,
namespacing, and folder structure creation for you.

By using the **SPK** (Super Power Key) in your custom code (replacing the class name
in your code with the SPK), JCB will automatically pull the Power from the repository
into your project. This makes it available in your JCB instance, allowing you to edit
and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in
namespacing to prevent collisions and improve reusability across different JCB systems.

You can also set the **JCB powers path** globally or per component under the
**Dynamic Integration** tab, providing flexibility and maintainability.

To add this specific Power to your project in JCB:

> Simply use this SPK:
```
Super---071c7cff_4c88_4b80_bd99_066c572dcb71---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")