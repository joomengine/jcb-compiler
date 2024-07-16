```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Config (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power**
> extends: **BaseConfig**

```uml
@startuml
class Config  #Gold {
  # JoomlaRegistry $config
  + __construct(?Input $input = null, ?JoomlaRegistry $params = null, ...)
  # getGiteausername() : ?string
  # getGiteatoken() : ?string
  # getSuperpowerscoreorganisation() : string
  # getSuperpowersinitrepos() : array
  # getTmppath() : string
  # getAddsuperpowers() : bool
  # getAddownpowers() : bool
  # getLocalpowersrepositorypath() : string
  # getApprovedpaths() : array
  # getIndentationvalue() : string
}

note right of Config::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Input $input = null
    ?JoomlaRegistry $params = null
    ?JoomlaRegistry $config = null
end note

note left of Config::getGiteausername
  get Gitea Username

  since: 3.2.0
  return: ?string
end note

note right of Config::getGiteatoken
  get Gitea Access Token

  since: 3.2.0
  return: ?string
end note

note left of Config::getSuperpowerscoreorganisation
  Get super power core organisation

  since: 3.2.0
  return: string
end note

note right of Config::getSuperpowersinitrepos
  Get super power init repos

  since: 3.2.0
  return: array
end note

note left of Config::getTmppath
  get temporary path

  since: 3.2.0
  return: string
end note

note right of Config::getAddsuperpowers
  Get switch to add super powers

  since: 3.2.0
  return: bool
end note

note left of Config::getAddownpowers
  Get switch to add own super powers

  since: 3.2.0
  return: bool
end note

note right of Config::getLocalpowersrepositorypath
  Get local super powers repository path

  since: 3.2.0
  return: string
end note

note left of Config::getApprovedpaths
  Get super power approved paths

  since: 3.2.0
  return: array
end note

note right of Config::getIndentationvalue
  get indentation value

  since: 3.2.2
  return: string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---be4ccfae_65a9_401e_bdbe_637d8c226954---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

