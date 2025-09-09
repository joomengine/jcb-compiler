### JCB! Power
# class ArchitectureController (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml

class ArchitectureController  #Gold {
  # $targetVersion
  + register(Container $container) : void
  + getAllowAdd(Container $container) : AllowAddInterface
  + getJ6ControllerAllowAdd(Container $container) : J6ControllerAllowAdd
  + getJ5ControllerAllowAdd(Container $container) : J5ControllerAllowAdd
  + getJ4ControllerAllowAdd(Container $container) : J4ControllerAllowAdd
  + getJ3ControllerAllowAdd(Container $container) : J3ControllerAllowAdd
  + getAllowEdit(Container $container) : AllowEditInterface
  + getJ6ControllerAllowEdit(Container $container) : J6ControllerAllowEdit
  + getJ5ControllerAllowEdit(Container $container) : J5ControllerAllowEdit
  + getJ4ControllerAllowEdit(Container $container) : J4ControllerAllowEdit
  + getJ3ControllerAllowEdit(Container $container) : J3ControllerAllowEdit
  + getAllowEditViews(Container $container) : AllowEditViewsInterface
  + getJ6ControllerAllowEditViews(Container $container) : J6ControllerAllowEditViews
  + getJ5ControllerAllowEditViews(Container $container) : J5ControllerAllowEditViews
  + getJ4ControllerAllowEditViews(Container $container) : J4ControllerAllowEditViews
  + getJ3ControllerAllowEditViews(Container $container) : J3ControllerAllowEditViews
}

note right of ArchitectureController::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of ArchitectureController::getAllowAdd
  Get The AllowAddInterface Class.

  since: 3.2.0
  return: AllowAddInterface
end note

note right of ArchitectureController::getJ6ControllerAllowAdd
  Get The AllowAdd Class.

  since: 5.1.2
  return: J6ControllerAllowAdd
end note

note left of ArchitectureController::getJ5ControllerAllowAdd
  Get The AllowAdd Class.

  since: 3.2.0
  return: J5ControllerAllowAdd
end note

note right of ArchitectureController::getJ4ControllerAllowAdd
  Get The AllowAdd Class.

  since: 3.2.0
  return: J4ControllerAllowAdd
end note

note left of ArchitectureController::getJ3ControllerAllowAdd
  Get The AllowAdd Class.

  since: 3.2.0
  return: J3ControllerAllowAdd
end note

note right of ArchitectureController::getAllowEdit
  Get The AllowEditInterface Class.

  since: 3.2.0
  return: AllowEditInterface
end note

note left of ArchitectureController::getJ6ControllerAllowEdit
  Get The AllowEdit Class.

  since: 5.1.2
  return: J6ControllerAllowEdit
end note

note right of ArchitectureController::getJ5ControllerAllowEdit
  Get The AllowEdit Class.

  since: 3.2.0
  return: J5ControllerAllowEdit
end note

note left of ArchitectureController::getJ4ControllerAllowEdit
  Get The AllowEdit Class.

  since: 3.2.0
  return: J4ControllerAllowEdit
end note

note right of ArchitectureController::getJ3ControllerAllowEdit
  Get The AllowEdit Class.

  since: 3.2.0
  return: J3ControllerAllowEdit
end note

note left of ArchitectureController::getAllowEditViews
  Get The AllowEditViewsInterface Class.

  since: 5.0.2
  return: AllowEditViewsInterface
end note

note right of ArchitectureController::getJ6ControllerAllowEditViews
  Get The AllowEditViews Class.

  since: 5.1.2
  return: J6ControllerAllowEditViews
end note

note left of ArchitectureController::getJ5ControllerAllowEditViews
  Get The AllowEditViews Class.

  since: 5.0.2
  return: J5ControllerAllowEditViews
end note

note right of ArchitectureController::getJ4ControllerAllowEditViews
  Get The AllowEditViews Class.

  since: 5.0.2
  return: J4ControllerAllowEditViews
end note

note left of ArchitectureController::getJ3ControllerAllowEditViews
  Get The AllowEditViews Class.

  since: 5.0.2
  return: J3ControllerAllowEditViews
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
Super---56ba30f5_a5c4_4c4c_be6f_a56f7f9cbc60---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")