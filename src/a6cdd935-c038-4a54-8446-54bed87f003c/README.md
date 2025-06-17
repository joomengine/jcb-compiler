### JCB! Power
# interface PlaceholderInterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Interfaces**

```uml
@startuml

interface PlaceholderInterface  #Lavender {
  + set(string $key, mixed $value, ...) : void
  + get(string $key) : mixed
  + exist(string $key) : bool
  + add(string $key, mixed $value, ...) : void
  + remove(string $key) : void
  + set_(string $key, mixed $value) : void
  + get_(string $key) : mixed
  + exist_(string $key) : bool
  + add_(string $key, mixed $value) : void
  + remove_(string $key) : void
  + set_h(string $key, mixed $value) : void
  + get_h(string $key) : mixed
  + exist_h(string $key) : bool
  + add_h(string $key, mixed $value) : void
  + remove_h(string $key) : void
  + setType(string $key, array $values) : void
  + clearType(string $key) : void
  + update(string $data, array $placeholder, ...) : string
  + update_(string $data) : string
  + keys(int $type, ?int $id = null) : array
}

note right of PlaceholderInterface::set
  Set content

  since: 3.2.0
  return: void
  
  arguments:
    string $key
    mixed $value
    bool $hash = true
end note

note left of PlaceholderInterface::get
  Get content by key

  since: 3.2.0
  return: mixed
end note

note right of PlaceholderInterface::exist
  Does key exist at all in any variation

  since: 3.2.0
  return: bool
end note

note left of PlaceholderInterface::add
  Add content

  since: 3.2.0
  return: void
  
  arguments:
    string $key
    mixed $value
    bool $hash = true
end note

note right of PlaceholderInterface::remove
  Remove content

  since: 3.2.0
  return: void
end note

note left of PlaceholderInterface::set_
  Set content with [ [ [ ... ] ] ] hash

  since: 3.2.0
  return: void
end note

note right of PlaceholderInterface::get_
  Get content with [ [ [ ... ] ] ] hash

  since: 3.2.0
  return: mixed
end note

note left of PlaceholderInterface::exist_
  Does key exist with [ [ [ ... ] ] ] hash

  since: 3.2.0
  return: bool
end note

note right of PlaceholderInterface::add_
  Add content with [ [ [ ... ] ] ] hash

  since: 3.2.0
  return: void
end note

note left of PlaceholderInterface::remove_
  Remove content with [ [ [ ... ] ] ] hash

  since: 3.2.0
  return: void
end note

note right of PlaceholderInterface::set_h
  Set content with # # # hash

  since: 3.2.0
  return: void
end note

note left of PlaceholderInterface::get_h
  Get content with # # # hash

  since: 3.2.0
  return: mixed
end note

note right of PlaceholderInterface::exist_h
  Does key exist with # # # hash

  since: 3.2.0
  return: bool
end note

note left of PlaceholderInterface::add_h
  Add content with # # # hash

  since: 3.2.0
  return: void
end note

note right of PlaceholderInterface::remove_h
  Remove content with # # # hash

  since: 3.2.0
  return: void
end note

note left of PlaceholderInterface::setType
  Set a type of placeholder with set of values

  since: 3.2.0
  return: void
end note

note right of PlaceholderInterface::clearType
  Remove a type of placeholder by main key

  since: 3.2.0
  return: void
end note

note left of PlaceholderInterface::update
  Update the data with the placeholders
THE ACTION OPTIONS ARE
1 -> Just replace (default)
2 -> Check if data string has placeholders
3 -> Remove placeholders not in data string

  since: 3.2.0
  return: string
  
  arguments:
    string $data
    array $placeholder
    int $action = 1
end note

note right of PlaceholderInterface::update_
  Update the data with the active placeholders

  since: 3.2.0
  return: string
end note

note left of PlaceholderInterface::keys
  return the placeholders for inserted and replaced code

  since: 3.2.0
  return: array
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
Super---a6cdd935_c038_4a54_8446_54bed87f003c---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")