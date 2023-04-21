--
-- PostgreSQL database dump
--

-- Dumped from database version 15.2
-- Dumped by pg_dump version 15.2

-- Started on 2023-04-21 22:20:49

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 3343 (class 1262 OID 16399)
-- Name: inertiavue3; Type: DATABASE; Schema: -; Owner: inertiavue3
--

CREATE DATABASE inertiavue3 WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Japanese_Japan.932';


ALTER DATABASE inertiavue3 OWNER TO inertiavue3;

\connect inertiavue3

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 224 (class 1259 OID 16450)
-- Name: fruits; Type: TABLE; Schema: public; Owner: inertiavue3
--

CREATE TABLE public.fruits (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    price integer
);


ALTER TABLE public.fruits OWNER TO inertiavue3;

--
-- TOC entry 223 (class 1259 OID 16449)
-- Name: fruits_id_seq; Type: SEQUENCE; Schema: public; Owner: inertiavue3
--

CREATE SEQUENCE public.fruits_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.fruits_id_seq OWNER TO inertiavue3;

--
-- TOC entry 3344 (class 0 OID 0)
-- Dependencies: 223
-- Name: fruits_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: inertiavue3
--

ALTER SEQUENCE public.fruits_id_seq OWNED BY public.fruits.id;


--
-- TOC entry 3191 (class 2604 OID 16453)
-- Name: fruits id; Type: DEFAULT; Schema: public; Owner: inertiavue3
--

ALTER TABLE ONLY public.fruits ALTER COLUMN id SET DEFAULT nextval('public.fruits_id_seq'::regclass);


--
-- TOC entry 3337 (class 0 OID 16450)
-- Dependencies: 224
-- Data for Name: fruits; Type: TABLE DATA; Schema: public; Owner: inertiavue3
--

INSERT INTO public.fruits VALUES (2, 'りんご', '2023-03-26 13:16:58', '2023-03-26 13:16:58', NULL);
INSERT INTO public.fruits VALUES (14, 'メロン', '2023-04-03 12:50:33', '2023-04-03 12:50:33', 700);
INSERT INTO public.fruits VALUES (1, 'みかん', '2023-03-26 13:16:58', '2023-03-26 13:16:58', 300);
INSERT INTO public.fruits VALUES (4, 'バナナ', '2023-03-26 13:16:58', '2023-03-26 13:16:58', 400);
INSERT INTO public.fruits VALUES (11, '苺', '2023-03-30 13:45:24', '2023-04-02 13:33:28', 400);
INSERT INTO public.fruits VALUES (13, 'ビワ', '2023-04-03 12:50:21', '2023-04-05 07:12:06', 600);
INSERT INTO public.fruits VALUES (16, 'キウイフルーツ', NULL, NULL, 450);
INSERT INTO public.fruits VALUES (12, 'もも', '2023-04-03 12:43:17', '2023-04-03 12:43:31', 300);
INSERT INTO public.fruits VALUES (19, 'マスクメロン', NULL, NULL, 1800);
INSERT INTO public.fruits VALUES (10, 'スイカ', '2023-03-28 13:47:13', '2023-04-02 13:29:55', 1100);
INSERT INTO public.fruits VALUES (5, '梨', '2023-03-26 13:16:58', '2023-03-26 13:16:58', 300);
INSERT INTO public.fruits VALUES (18, 'パイナップル', NULL, NULL, 500);
INSERT INTO public.fruits VALUES (49, 'パッションフルーツ', NULL, NULL, 300);
INSERT INTO public.fruits VALUES (3, 'ぶどう', '2023-03-26 13:16:58', '2023-03-26 13:16:58', 500);
INSERT INTO public.fruits VALUES (25, 'マンゴー', NULL, NULL, 700);


--
-- TOC entry 3345 (class 0 OID 0)
-- Dependencies: 223
-- Name: fruits_id_seq; Type: SEQUENCE SET; Schema: public; Owner: inertiavue3
--

SELECT pg_catalog.setval('public.fruits_id_seq', 49, true);


--
-- TOC entry 3193 (class 2606 OID 16455)
-- Name: fruits fruits_pkey; Type: CONSTRAINT; Schema: public; Owner: inertiavue3
--

ALTER TABLE ONLY public.fruits
    ADD CONSTRAINT fruits_pkey PRIMARY KEY (id);


-- Completed on 2023-04-21 22:20:49

--
-- PostgreSQL database dump complete
--

